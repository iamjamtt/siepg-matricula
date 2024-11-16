<div style="height: 100vh;">
    <div class="row h-100 g-0">
        <div class="col-12 col-lg-6 col-xl-7 d-none d-lg-block">
            <div
                class="h-100"
                style="
                    background-image: url('{{ asset('files/imagenes/bg-auth.webp') }}');
                    background-size: cover;
                    background-position: center;
                "
            ></div>
        </div>
        <div class="col-12 col-lg-6 col-xl-5 d-flex flex-column justify-content-center">
            <div
                class="container py-5 px-3 px-lg-5 d-flex flex-column justify-content-center align-items-center"
                style="max-width: 500px;"
            >
                <div class="text-center mb-4">
                    <img
                        src="{{ asset('files/imagenes/logo-epg.png') }}"
                        alt="logo"
                        height="110"
                    />
                </div>
                <h4 class="text-center mb-3" style="font-weight: 700;">
                    Escuela de Posgrado
                </h4>
                <p class="text-center text-muted mb-5">
                    Bienvenido al sistema de matricula de la Escuela de Posgrado de la Universidad Nacional de Ucayali.
                </p>
                <form class="row g-3" wire:submit="ingresar">
                    <div class="col-12">
                        <label for="correoElectronico" class="form-label">
                            Correo Electrónico
                        </label>
                        <input
                            type="email"
                            class="form-control"
                            id="correoElectronico"
                            placeholder="example@unu.edu.pe"
                        >
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="contrasena">
                            Contraseña
                        </label>
                        <div
                            class="input-group"
                            x-data="{ modoPassword: 'password' }"
                        >
                            <input
                                x-bind:type="modoPassword"
                                class="form-control"
                                id="contrasena"
                                placeholder="********"
                            >
                            <div class="input-group-text">
                                <a
                                    class="link-secondary cursor-pointer"
                                    x-on:click="modoPassword == 'password' ? modoPassword = 'text' : modoPassword = 'password'"
                                >
                                    <x-icon.eye x-show="modoPassword == 'password'" x-cloak />
                                    <x-icon.eye-off x-show="modoPassword == 'text'" x-cloak />
                                </a>
                            </div>
                        </div>
                        @error('contrasena')
                            <span class="form-text text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mt-5">
                        <button
                            type="submit"
                            class="btn btn-primary w-100"
                        >
                            Ingresar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
