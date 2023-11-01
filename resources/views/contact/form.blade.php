<div class="my-2">
    <x-label for="name">Tu nombre:</x-label>
    <x-input-form type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Ingresa tu nombre completo"/>
    @error('name')
    <x-error-form>
        {{ $message }}
    </x-error-form>
    @enderror
</div>
<div class="my-2">
    <x-label for="email">Tu email:</x-label>
    <x-input-form type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Ingresa tu email: nombre@mail.com"/>
    @error('email')
    <x-error-form>
        {{ $message }}
    </x-error-form>
    @enderror
</div>
<div class="my-2">
    <x-label for="phone">Tu teléfono:</x-label>
    <x-input-form type="text" name="phone" maxlength="8" id="phone" value="{{ old('phone') }}" placeholder="00000000"/>
    @error('phone')
    <x-error-form>
        {{ $message }}
    </x-error-form>
    @enderror
</div>
<div class="my-2">
    <x-label for="title">Tu título:</x-label>
    <x-input-form type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Ingresa el titulo de tu consulta"/>
    @error('title')
    <x-error-form>
        {{ $message }}
    </x-error-form>
    @enderror
</div>
<div class="my-2">
    <x-label for="detail">¿Cuál es tu consulta?</x-label>
    <x-text-area-form type="detail" rows="5" name="detail" id="detail">
        {{ old('detail') }}
    </x-text-area-form>
    @error('title')
    <x-error-form>
        {{ $message }}
    </x-error-form>
    @enderror
</div>
