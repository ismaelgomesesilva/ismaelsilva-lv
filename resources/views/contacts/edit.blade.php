<x-app-layout>
    <div class="card">
        <div class="card-header d-flex ">
            <span>Edit Contact</span>
        </div>

        <div class="card-body">

            <form action="{{ route('contacts.update', $contact) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Name --}}
                <div style="margin-bottom: 1rem;">
                    <label for="name" class="form-label">Name:</label><br>
                    <input type="text" id="name" name="name" value="{{ old('name', $contact->name) }}" class="form-control">
                    @error('name')
                    <div style="color:red">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Email --}}
                <div style="margin-bottom: 1rem;">
                    <label for="email" class="form-label">Email:</label><br>
                    <input type="text" id="email" name="email" value="{{ old('email', $contact->email) }}" class="form-control">
                    @error('email')
                    <div style="color:red">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Contact --}}
                <div style="margin-bottom: 1rem;">
                    <label for="contact" class="form-label">Contact:</label><br>
                    <input type="text" id="contact" name="contact" value="{{ old('contact', $contact->contact) }}" class="form-control">
                    @error('contact')
                    <div style="color:red">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Contact</button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>