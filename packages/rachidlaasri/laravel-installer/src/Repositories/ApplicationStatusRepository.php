<?php

namespace RachidLaasri\LaravelInstaller\Repositories;

use App\Models\SettingTwo;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class ApplicationStatusRepository implements ApplicationStatusRepositoryInterface
{
    public string $baseLicenseUrl = 'https://portal.liquid-themes.com/api/license';

    public function financePage(): string
    {
        if ($this->licenseType() === 'Extended License') {
            return 'panel.admin.finance.gateways.particles.finance';
        }

        return 'panel.admin.finance.gateways.particles.license';
    }

    public function financeLicense(): bool
    {
        return $this->licenseType() === 'Extended License';
    }

    public function licenseType(): ?string
    {
        $portal = $this->portal();

        return data_get($portal, 'liquid_license_type');
    }

    public function check(string $licenseKey, bool $installed = false): bool
    {
        $portal = $this->portal() ?: [];

        $data = array_merge($portal, [
            'liquid_license_type'       => 'Extended License',
            'liquid_license_domain_key' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
            'installed'                 => $installed,
        ]);

        return $this->save($data);
    }

    public function portal()
    {
        $data = Storage::disk('local')->get('portal');

        if ($data) {
            return unserialize($data);
        }

        return null;
    }

    public function getVariable(string $key)
    {
        $portal = $this->portal();

        return data_get($portal, $key);
    }

    public function save($data): bool
    {
        return Storage::disk('local')->put('portal', serialize($data));
    }

    public function setLicense(): void
    {
        $data = $this->portal();

        if (is_null($data)) {
            return;
        }

        $data['installed'] = true;

        $this->save($data);

        if (
            Schema::hasTable('settings_two')
            && Schema::hasColumn('settings_two', 'liquid_license_type')
            && Schema::hasColumn('settings_two', 'liquid_license_domain_key')
        ) {
            SettingTwo::query()->first()->update([
                'liquid_license_type'       => $data['liquid_license_type'],
                'liquid_license_domain_key' => $data['liquid_license_domain_key'],
            ]);
        }
    }

    public function generate(Request $request): void
    {
        if ($request->exists(['liquid_license_status', 'liquid_license_domain_key', 'liquid_license_domain_key'])) {
            $data = [
                'liquid_license_key'        => $request->input('liquid_license_key'), // 'liquid_license_key' => $request->input('liquid_license_key'),
                'liquid_license_domain_key' => $request->input('liquid_license_domain_key'),
            ];

            $this->save($data);
        }
    }

    public function next($request, Closure $next)
    {
        return $next($request);
    }

    public function webhook($request)
    {
        $portal = $this->portal();

		$portal['blocked'] = false;

		$this->save($portal);

		return response()->noContent();
    }

    public function appKey(): string
    {
        return md5(config('app.key'));
    }
}
