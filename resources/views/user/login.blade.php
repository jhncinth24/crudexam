@include('partials.header')
    <header class="max-w-lg max-auto">
        <a href="#">
            <h1 class="text-3xl font-bold text-white text-center uppercase">Student Admin</h1>
        </a>
    </header>
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Welcome to Student System</h3>
            <p class="text-gray-600 pt-2"> Sign in to your account</p>
        </section>
        <section class="mt-10">
            <form action="" class="flex flex-col">
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="email" class="block text-gray-700 text-sm 
                    font-bold mb-2 ml-3">Email</label>
                    <input type="email" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none border-b-4 border-gray-400 px-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="email" class="block text-gray-700 text-sm 
                    font-bold mb-2 ml-3">Password</label>
                    <input type="password" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none border-b-4 border-gray-400 px-3">
                </div>
                <button class="bg-gray-600 hover:bg-blue-700 text-white
                font-bold py-2 rounded shadow-lg hover:shadow-xl transition
                duration-200" type="submit">Login</button>
            </form>
        </section>
    </main>
@include('partials.footer')