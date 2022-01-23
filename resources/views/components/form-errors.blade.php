@if (count($errors) > 0)
            <ul class="list-none text-md font-semibold text-center text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
@endif