<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Archive</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased">
    <div class="max-w-7xl mx-auto mt-10">
        <div class="flex justify-between mb-4">
            <form action="{{ route('users.index') }}" method="GET" class="flex">
                <input type="search" name="search" placeholder="Search users..." class="block w-full p-2 pl-10 text-sm text-gray-700 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" value="{{ request()->input('search') }}">
                <button type="submit" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Search
                </button>
            </form>
            <a href="{{ route('users.create') }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                Create User
            </a>
        </div>
        <div class="overflow-x-auto relative shadow-md rounded-lg">
            <table class="w-full text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-blue-500 dark:bg-purple-500">
                    <tr>
                        <th scope="col" class="py-3 px-6">Full Name</th>
                        <th scope="col" class="py-3 px-6">Email</th>
                        <th scope="col" class="py-3 px-6">Phone</th>
                        <th scope="col" class="py-3 px-6">Age</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-100 dark:hover:bg-purple-100 transition duration-300">
                            <td class="py-4 px-6">{{ $user->full_name }}</td>
                            <td class="py-4 px-6"><a href="mailto:{{ $user->email }}" class="text-blue-600 hover:text-blue-900">{{ $user->email }}</a></td>
                            <td class="py-4 px-6">{{ $user->phone }}</td>
                            <td class="py-4 px-6">{{ $user->age }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $users->links() }}
    </div>
</body>
</html>
