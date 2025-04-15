<x-app-layout>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
    @endif

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Contacts</span>
            <a href="{{ route('contacts.create') }}" class="btn btn-success">New Contact</a>
        </div>

        <div class="card-body">
            <table class="table  table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->contact }}</td>
                        <td class="text-end">
                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{ $contacts->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>



</x-app-layout>