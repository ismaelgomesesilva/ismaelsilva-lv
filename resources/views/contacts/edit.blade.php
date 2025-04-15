<div>
    @if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Name --}}
        <div style="margin-bottom: 1rem;">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name', $contact->name) }}" required>
            @error('name')
            <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email --}}
        <div style="margin-bottom: 1rem;">
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" value="{{ old('email', $contact->email) }}" required>
            @error('email')
            <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        {{-- Contact --}}
        <div style="margin-bottom: 1rem;">
            <label for="contact">Contact:</label><br>
            <input type="text" id="contact" name="contact" value="{{ old('contact', $contact->contact) }}">
            @error('contact')
            <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Update Contact</button>
        </div>
    </form>
</div>