

        <div class="p-4 sm:ml-48">
            <div class="p-2  rounded-lg dark:border-gray-700 mt-10 h-full">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="<?= WEBROOT?>/?controller=dette&action=dette"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                Suivie Dette
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                                <a href="#"
                                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Detail
                                    Dette</a>
                            </div>
                        </li>
                    </ol>
                </nav>

            </div>
            <div class="flex align-center justify-around  w-full ">
                <div class="w-1/2 h-48 border border-gray-200 rounded-lg shadow flex-col align-center justify-around ">
                    <div class="flex align-center justify-around w-full h-24">
                        <img src="../public/assets/user.png" class="bg-blue-50 w-24 h-24 rounded-full mt-2"></img>
                        <div class="w-64 h-24 mt-2 flex-col">
                            <h5>Prenom: Amadou </h5>
                            <h5>Nom: Ba </h5>
                            <h5>Tel: 778087261 </h5>
                            <h5>Adresse: Keur Massar </h5>
                        </div>
                    </div>
                    <div class="w-64 h-24 mt-5 mx-3 flex-col">
                        <h5 class="font-medium">Total Dette: 25.000 </h5>
                        <h5 class="font-medium">Total Verse: 10.000 </h5>
                        <h5 class="font-medium text-lime-700">Montant Du: 15.000 </h5>
                    </div>


                </div>
                <div class="w-1/2 h-48 border border-gray-200 rounded-lg shadow mx-3 flex-col ">
                    <h5></h5>
                    <form class="flex items-center px-5 py-0 flex-col">
                        <div class="flex w-full align-center justify-center mt-2">
                            <label for="" class="text-black-900 px-6 mt-3">Montant Du</label>
                            <div class="relative w-64 mt-2">
                                <input type="text" id="simple-search"
                                    class=" border bg-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>
                        </div>
                        <div class="flex w-full align-center justify-center mt-2">
                            <label for="" class="text-black-900 px-6 mt-3 mx-3">Montant</label>
                            <div class="relative w-64 mt-2">
                                <input type="text" id="simple-search"
                                    class=" border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                        </div>
                        <div class="w-full flex align-center justify-center py-3">
                            <button type="button"
                                class="w-48  text-white bg-sky-900  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex align-center justify-around  w-full mt-5 ">
                <div class="w-1/2 h-60 border border-gray-200 rounded-lg shadow flex">
                    <div class="relative w-full overflow-x-auto sm:rounded-lg mx-3 mt-2">
                        <table class="w-full  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border">
                            <thead
                                class="text-xs text-white uppercase bg-indigo-400 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Article
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Prix
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Qte
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class=" odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-1.5 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Article1
                                    </th>
                                    <td class="px-6 py-1.5 ">
                                        1.000
                                    </td>
                                    <td class="px-6 py-1.5">
                                        03
                                    </td>
                                    <td class="px-6 py-1.5">
                                        3.000
                                    </td>
                                </tr>
                                <tr
                                    class=" odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-1.5 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Article1
                                    </th>
                                    <td class="px-6 py-1.5 ">
                                        1.000
                                    </td>
                                    <td class="px-6 py-1.5">
                                        03
                                    </td>
                                    <td class="px-6 py-1.5">
                                        3.000
                                    </td>
                                </tr>
                                <tr
                                    class=" odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-1.5 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Article1
                                    </th>
                                    <td class="px-6 py-1.5 ">
                                        1.000
                                    </td>
                                    <td class="px-6 py-1.5">
                                        03
                                    </td>
                                    <td class="px-6 py-1.5">
                                        3.000
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <div class="w-full flex py-3 px-6 mt-3">
                            <button type="button"
                                class="w-48  text-white bg-sky-900  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Somme
                                Total 10.000</button>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 h-60 border border-gray-200 rounded-lg shadow  flex-col ">
                    <div class="relative w-full overflow-x-auto sm:rounded-lg mt-2">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border">
                            <thead
                                class="text-xs text-white uppercase bg-indigo-400 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3">
                                        Reference
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        Date
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        Montant
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class=" odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-1.5 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Ref0001
                                    </th>
                                    <td class="px-4 py-1.5 ">
                                        20/07/2024
                                    </td>
                                    <td class="px-4 py-1.5">
                                        15.000
                                    </td>
                                    <td class="px-6 py-1.5">
                                        <a href="Detail dette.html"
                                        class=" mx-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
