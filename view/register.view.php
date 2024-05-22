<?php require ('layouts\header.php');?>

<?php require ('layouts\nav.php');?>



<div>
    <form action="../controllers/register_store.php" method="POST" class="max-w-md mx-auto rounded-lg shadow-lg p-4 mt-4">

    <h3 class="text-2xl mb-3 border-b-2 border-blue-800 pb-2">Register Student</h3>

    <div class="mb-5">
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
        <input type="text" name="first_name" id="first_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" required />
    </div> 

    <div class="mb-5">
        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
        <input type="text" name="last_name" id="last_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" required />
    </div>

    <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
        <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" required />
    </div>

    <div class="mb-5">
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone</label>
        <input type="text" name="phone" id="phone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Your Phone -" required />
    </div>

    <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
        <input type="password" name="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>


    <div class="mb-5">
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
        <textarea name="address" id="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your Address"></textarea>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Register new account</button>
    </form>

</div>


<?php require ('layouts\footer.php');?> 