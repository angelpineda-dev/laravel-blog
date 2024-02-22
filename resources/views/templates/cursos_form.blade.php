

<?php $select_options = ['Design', 'Programming'] ?>

<div class="p-1 m-2 ">
    <label for="name" class="text-xl block cursor-pointer">Nombre:</label>
    <input id="name" type="text" name="name" value="{{ isset($curso) ? old('name', $curso->name) : old('name') }}" class="border border-neutral-400 rounded" />
    @error('name')
                {{ $message }}
    @enderror
</div>

<div class="p-1 m-2 ">
    <label for="slug" class="text-xl block cursor-pointer">Slug:</label>
    <input id="slug" type="text" name="slug" value="{{ isset($curso) ? old('slug', $curso->name) : old('slug') }}" class="border border-neutral-400 rounded" />
    @error('slug')
                {{ $message }}
    @enderror
</div>

<div class="p-1 m-2 ">
    <label for="category" class="text-xl block cursor-pointer">Categoria</label>

    <select name="category" id="category" class="border border-neutral-400 rounded">
        <option value="">Selecciona una opcion</option>
        @foreach ($select_options as $option => $value)
            <option 
                value="{{$value}}" 
                @selected( 
                    isset($curso)
                    ? old('category', $curso->category) == $value 
                    : @old('category') == $value)> 
                {{$value}} 
            </option>
        @endforeach
    </select>
    @error('category')
        {{ $message }}
    @enderror
</div>

<div class="p-1 m-2 ">
    <label for="description" class="text-xl block cursor-pointer">Descripción</label>
    <textarea id="description" name="description" cols="50" rows="5" class="border border-neutral-400 rounded">{{isset($curso) ? old('description', $curso->description) : old('description')}}</textarea>
    @error('description')
                {{ $message }}

    @enderror
</div>

<input type="submit" value="Enviar" class="border border-neutral-500 p-1 w-2/5 mx-auto">
