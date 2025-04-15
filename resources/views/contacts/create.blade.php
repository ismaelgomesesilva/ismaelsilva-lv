<div>
    @if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf

        {{-- Name --}}
        <div style="margin-bottom: 1rem;">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
            <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email --}}
        <div style="margin-bottom: 1rem;">
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
            <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        {{-- Contact --}}
        <div style="margin-bottom: 1rem;">
            <label for="contact">Contact:</label><br>
            <input type="text" id="contact" name="contact" value="{{ old('contact') }}">
            @error('contact')
            <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Add Contact</button>
        </div>
    </form>
</div>