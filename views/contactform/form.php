<main class="flex-1 w-3/5 items-center justify-center bg-slate-600 h-4/5 my-16 rounded-3xl shadow-lg shadow-gray-700/20 border-8 border-solid border-orange-700/60 shadow-inner">
    <h1 class="text-5xl font-black mb-10 mt-4 text-center underline">Contact us!</h1>
    <form action="/contact-form" method="post" class="w-full max-w-md m-auto mt-16">
        <div class="form-group mt-4">
            <label for="name" class="block font-bold mb-2 text-lg">Name</label>
            <input type="text"
                   class="form-control w-full max-w-lg text-black px-2 py-1 mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:border-orange-700 focus:ring-1 focus:ring-orange-700 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
                   id="name" name="name" placeholder="Jane Doe" required>
        </div>
        <div class="form-group mt-4">
            <label for="email" class="block font-bold mb-2 text-lg">Email</label>
            <input type="email"
                   class="form-control w-full max-w-lg text-black px-2 py-1 mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400  focus:border-orange-700 focus:ring-1 focus:ring-orange-700 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
                   id="email" name="email"
                   placeholder="janedoe@example.com" required>
        </div>
        <div class="form-group mt-4">
            <label for="subject" class="block font-bold mb-2 text-lg">Subject</label>
            <input type="text"
                   class="form-control w-full max-w-lg text-black px-2 py-1 mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:border-orange-700 focus:ring-1 focus:ring-orange-700 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
                   id="subject" name="subject"
                   placeholder="Question about..." required>
        </div>
        <div class="form-group mt-4">
            <label for="message" class="block font-bold mb-2 text-lg">Message</label>
            <textarea
                    class="form-control w-full max-w-lg text-black px-2 py-1 mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:border-orange-700 focus:ring-1 focus:ring-orange-700 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
                    id="message" name="message" rows="5"
                    placeholder="I have a question about... from..." required></textarea>
        </div>
        <button type="submit"
                class="block btn btn-primary text-center mx-auto mt-10 bg-slate-900 py-2 px-6 mb-4 rounded-sm hover:bg-orange-700/60 transition-all shadow-lg  font-semibold">
            Submit
        </button>
    </form>
</main>
