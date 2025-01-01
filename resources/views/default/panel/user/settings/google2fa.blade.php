@extends('panel.layout.settings', ['disable_tblr' => true])
@section('title', __('Autenticação de Dois Fatores'))
@section('titlebar_actions', '')

@section('settings')
    @if (Google2FA::isActivated())
        <div class="text-center">
            <h2 class="mb-12">
                @lang('2FA está ativado!')
            </h2>
            <x-button
                class="w-full"
                variant="danger"
                size="lg"
                href="{{ route('dashboard.user.2fa.deactivate') }}"
            >
                {{ __('2FA está desativado!') }}
            </x-button>
        </div>
    @else
        <form
            action="{{ route('dashboard.user.2fa.activate') }}"
            method="post"
        >
            @csrf
            <input
                type="hidden"
                name="google2fa_secret"
                value="{{ $secret }}"
            >

            <h2 class="mb-12">
                @lang('Ativar 2FA')
            </h2>

            <div class="mb-8">
                <x-form-step
                    class="mb-2.5 bg-transparent p-0"
                    step="1"
                    label="{{ __('Install Google Authenticator App') }}"
                />
                <p class="ps-8 text-sm font-medium lg:w-9/12">
                    @lang("Para ativar a autenticação de dois fatores (2FA), você precisará do aplicativo Google Authenticator. Você pode baixá-lo na App Store ou no Google Play Store.")
                </p>
            </div>

            <div class="mb-8">
                <x-form-step
                    class="mb-2.5 bg-transparent p-0"
                    step="2"
                    label="{{ __('Escaneie o código QR.') }}"
                />
                <p class="ps-8 text-sm font-medium lg:w-9/12">
                    @lang("Use a câmera do seu celular para escanear o código QR abaixo. Se a opção de escanear não estiver disponível, você pode inserir a chave manualmente no seu aplicativo.")

                    <span class="mt-5 block opacity-50">
                        @lang('Manual Key:')
                    </span>
                    <span class="twofa-secret-key-wrap">
                        <span class="twofa-secret-key">
                            {!! $secret !!}
                        </span>
                        <button
                            class="lqd-clipboard-copy size-5 pointer-events-auto ms-2 inline-flex items-center justify-center transition-all hover:-translate-y-[2px] hover:scale-110"
                            data-copy-options='{ "content": ".twofa-secret-key", "contentIn": "<.twofa-secret-key-wrap" }'
                            type="button"
                            title="{{ __('Copy to clipboard') }}"
                        >
                            <span class="sr-only">{{ __('Copiar') }}</span>
                            <x-tabler-copy class="size-4" />
                        </button>
                    </span>
                </p>
            </div>

            <div class="mb-8 flex items-center justify-center rounded-xl border p-4 md:p-14 lg:w-9/12">
                {!! $qrCode !!}
            </div>

            <div class="mb-20">
                <x-form-step
                    class="mb-2.5 bg-transparent p-0"
                    step="2"
                    label="{{ __('Código de Validação') }}"
                />
                <p class="mb-10 ps-8 text-sm font-medium lg:w-9/12">
                    @lang('Por favor, insira o código de verificação de 6 dígitos exibido no seu aplicativo Google Authenticator para finalizar o processo e ativar a autenticação de dois fatores (2FA).')
                </p>

                <x-forms.input
                    id="otp"
                    size="xl"
                    name="one_time_password"
                />
            </div>

            <x-button
                class="w-full"
                size="lg"
                type="submit"
            >
                {{ __('Ativar 2FA') }}
            </x-button>
        </form>
    @endif

@endsection

@push('script')
@endpush
