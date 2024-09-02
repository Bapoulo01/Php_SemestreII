
<div class="p-4 sm:ml-48">
    <div class="p-2 rounded-lg dark:border-gray-700 mt-10 h-full">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="<?=WEBROOT?>/?controller=client&action=client"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                Liste Clients
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <span class="material-symbols-outlined"> chevron_right </span>
                                <a href="#"
                                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Ajout
                                    Dette</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="flex align-center justify-around w-full">
                <div class="w-3/4 h-80 border border-gray-200 rounded-lg shadow flex-col mt-3">
                        <form action="<?= WEBROOT; ?>" method="post" class="flex items-center py-0 flex-col align-center justify-center ">
                            <div class="w-full  flex align-center justify-center mt-3 ">
                                <div class="flex align-center justify-between w-80">
                                    <label for="" class="text-black-900 mt-2">Prenom</label>
                                    <input type="text" id="simple-search" name="prenom"
                                        class=" mx-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                </div>
                                <div class="flex align-center justify-center w-80 ">
                                    <label for="" class="text-black-900 mx-3 mt-2">Nom</label>
                                    <input type="text" id="simple-search" name="nom"
                                        class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                </div>
                            </div>
                            <div class="w-full mt-4 flex align-center justify-center ">
                                <div class="flex align-center justify-between w-80 ">
                                    <label for="" class="text-black-900 mt-2">Email</label>
                                    <input type="text" id="simple-search" name="email"
                                        class=" mx-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                </div>
                                <div class="flex align-center justify-center w-80">
                                    <label for="" class="text-black-900 mx-3">Tel</label>
                                    <input type="text" id="simple-search" name="telephone"
                                        class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                </div>
                            </div>
                            <div class="w-full mt-4 flex align-center justify-center ">
                                <div class="flex align-center justify-between w-80  ">
                                    <label for="" class="text-black-900 mt-2">Adresse</label>
                                    <input type="text" id="simple-search" name="adresse"
                                        class=" mx-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                </div>
                                <div class="flex align-center justify-center w-80 ">
                                    <label for="" class="text-black-900 mx-3 mt-2">Photo</label>
                                    <input type="file" id="simple-search" name="image"
                                        class=" mx-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                </div>
                            </div>
                            <div class="w-full mt-5 flex align-center justify-center ">
                                 <input type="hidden" name="controller" value="client">
                                <button type="submit" name="action" value="SaveClient"
                                class="bg-sky-900 w-72 p-2.5 ms-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Ajouter
                                </button>
                            </div>
                        </form>
                </div> 

</div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

