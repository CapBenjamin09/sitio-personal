@php
    $edit = isset($project);
@endphp

<div>
    <x-label for="email">Nombre de proyecto:</x-label>
    <x-input-form
        type="text"
        name="name"
        id="name"
        value="{{$edit ? old('name', $project->name) : old('name') }}"
        />
    @error('name')
    <x-error-form>
        {{ $message }}
    </x-error-form>
    @enderror

</div>
<div>
    <x-label for="password">Descripción del proyecto:</x-label>
    <x-text-area-form
        name="detail"
        id="detail"
        >
        {{$edit ? old('detail', $project->detail) : old('detail') }}
    </x-text-area-form>
    @error('detail')
    <x-error-form>
        {{ $message }}
    </x-error-form>
    @enderror
</div>
<div class="justify-center items-center">
    <x-label for="image_path">Imagen de proyecto:</x-label>
    @if($edit)
        <img src="{{ asset($project->image_path) }}" alt="" class="mx-auto justify-center items-center my-2">
    @endif
    <x-input-form type="file" name="image_path" id="image_path" accept="image/*"/>
    @error('image_path')
    <x-error-form>
        {{ $message }}
    </x-error-form>
    @enderror
</div>
