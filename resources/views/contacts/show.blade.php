<x-app-layout>
    <div class="card">
        <div class="card-header d-flex ">
            <span>ContactDetails</span>
        </div>

        <div class="card-body">
            <p>Name: {{ $contact->name }}</p>
            <p>Email: {{ $contact->email }}</p>
            <p>Contact: {{ $contact->contact }}</p>
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</x-app-layout>