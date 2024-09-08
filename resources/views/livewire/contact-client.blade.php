<div>

    <section class="contact-us-section padding-b-120">
        <div class="container container-two">
            <div class="bg-white contact-form">
                <div class="section-heading">
                    <span class="bg-gray-100 section-heading__subtitle">
                        <span class="text-gradient fw-semibold">{{__('brand.contact_us')}}</span>
                    </span>
                    <h2 class="text-3xl section-heading__title lg:text-4xl">{{__('brand.avez_vous_question')}} </h2>
                    <p class=" section-heading__desc">{{__('brand.question_response')}}</p>
                </div>
              <form wire:submit.prevent='save' class="contact-form__form">
                <div class="grid grid-cols-12 gap-4">
                    <div class="w-full col-span-12 lg:col-span-6 col-xs-6">
                        <input type="text" wire:model='contact.nom' class="common-input" placeholder="Votre Nom">
                        @error('contact.nom')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full col-span-12 lg:col-span-6 col-xs-6">
                        <input type="email" wire:model='contact.email' class="common-input" placeholder="Votre E-mail">
                        @error('contact.email')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full col-span-12 lg:col-span-6 col-xs-6">
                        <input type="tel" wire:model='contact.telephone' class="common-input" placeholder="Numero de telephone">
                        @error('contact.telephone')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-12 lg:col-span-6 col-xs-6">
                        <input wire:model='contact.sujet' type="text" class="common-input" placeholder="Sujet">
                        @error('contact.sujet')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full col-span-12">
                        <textarea wire:model='contact.message' class="common-input" placeholder="Votre Message"></textarea>
                        @error('contact.message')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-center col-span-12">
                        <button type="submit" class="btn btn-main w-100">Envoyer</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>
</div>
