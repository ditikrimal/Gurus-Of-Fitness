<!-- resources/views/admin/createAdminUser.blade.php -->

<form action="{{ route('admin.create') }}" method="POST">
    @csrf

    <label for="email">Email</label>
    <input id="email" name="email" required type="email" value="{{ old('email') }}">

    <label for="password">Password</label>
    <input id="password" name="password" required type="password">

    <button type="submit">Create Admin User</button>
</form>
