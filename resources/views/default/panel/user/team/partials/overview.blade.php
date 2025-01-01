<x-card
    class="lqd-team-overview bg-gradient-to-b from-secondary to-[#F1EEFF] to-100% dark:from-pink-300/10 dark:to-transparent max-md:text-center"
    size="lg"
>
    <div class="flex flex-wrap items-center gap-y-5">
        <div class="w-full md:w-1/2 lg:w-5/12">
            <h3 class="mb-14">
                @lang('Convide seus colegas e <br> colaboradores para juntar-se à sua equipe e <br> maximizar os beneficios da IA.')
            </h3>
            <div class="flex flex-wrap justify-center gap-2 md:justify-start">
                <x-button
                    class="dark:bg-foreground dark:text-background dark:hover:bg-green-500 dark:hover:text-white"
                    variant="ghost-shadow"
                    hover-variant="success"
                    href="#email"
                    onclick="document.getElementById('email').focus()"
                >
                    <x-tabler-plus class="size-4" />
                    @lang('Adicionar Membro')
                </x-button>
                @if (!$subscription || $user?->relationPlan?->is_team_plan == 0)
                    <x-button
                        class="dark:bg-foreground dark:text-background dark:hover:bg-green-500 dark:hover:text-white"
                        variant="ghost-shadow"
                        hover-variant="success"
                        href="{{ route('dashboard.user.payment.subscription') }}"
                    >
                        @lang('Atualizar Plano de Equipe')
                    </x-button>
                @endif
            </div>
        </div>

        <div class="mx-auto flex text-center font-bold md:me-0 md:ms-auto md:w-1/2 md:justify-end">
            <div class="flex flex-col text-heading-foreground">
                <p>
                    @lang('Membros da Equipe')
                </p>
                <p class="my-3 text-[58px] font-bold leading-none">
                    {{ $app_is_demo ? 4 : $team->members->count() }}
                </p>
                <p class="mb-0">
                    <span class="opacity-60">
                        @lang('Allowed Seats'):
                    </span>
                    <b>{{ $app_is_demo ? 2 : $team->allow_seats }}</b>
                </p>
                <p class="mb-0">
                    <span class="opacity-60">
                        @lang('Total Words Generated'):
                    </span>
                    <b>{{ $app_is_demo ? 2400 : $team->members?->sum('used_word_credit') }}</b>
                </p>
                <p class="mb-0">
                    <span class="opacity-60">
                        @lang('Total Images Generated'):
                    </span>
                    <b>{{ $app_is_demo ? 2400 : $team->members?->sum('used_image_credit') }}</b>
                </p>
            </div>
        </div>
    </div>
</x-card>
