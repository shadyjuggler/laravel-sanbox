<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">Sign in to your account</h1>

    <x-card class="py-8 px-16">
        <form
            action="{{ route('auth.store') }}"
            method="POST"
        >
            @csrf

            <div class="mb-8">
                <label
                    for="email"
                    class="mb-2 block w-full text-sm font-medium text-slate-900"
                >E-mail</label>
                <x-text-input name="email" />
            </div>

            <div class="mb-8">
                <label
                    for="pswd"
                    class="mb-2 block w-full text-sm font-medium text-slate-900"
                >Password</label>
                <x-text-input
                    name="pswd"
                    type="password"
                />
            </div>

            <div class="mb-8 flex justify-between">
                <div>
                    <div class="flex items-center gap-2">
                        <input
                            type="checkbox"
                            name="remember"
                            class="rounded-sm border-slate-500"
                        >
                        <label for="remember">Remember Me</label>
                    </div>
                </div>
                <div>
                    <a
                        href="#"
                        class="text-indigo-600 hover:underline"
                    >
                        Forget password?
                    </a>
                </div>
            </div>

            <x-button class="w-full bg-green-50">Login</x-button>
        </form>
    </x-card>
</x-layout>
