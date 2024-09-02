<?php

//fonction pour calculer le montant total
function MontantTotalDette(){
    $montantTotal=0;
    if (isset($_SESSION["tabArticle"])) {
        foreach ($_SESSION["tabArticle"] as $article) {
        $montantTotal+=$article["total"];
    }
    }
    
    return $montantTotal;
}


$total=MontantTotalDette();
$errors = [];
$client = [];
$article=[];
$tabArticle=[];

if (isset($_SESSION["errors"])) {
    $errors = $_SESSION["errors"];
    unset($_SESSION["errors"]);
}
if (isset($_SESSION["client"])) {
    $client = $_SESSION["client"];  
    // var_dump($client);
    // die;
}
if (isset($_SESSION["article"])) {
    $article = $_SESSION["article"];  
}
if (isset($_SESSION["tabArticle"])) {
    $tabArticle = $_SESSION["tabArticle"];  
}

//  var_dump($client);
//     die;


?>
        <div class="p-4 sm:ml-48">
            <div class="p-2  rounded-lg dark:border-gray-700 mt-10 h-full">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="<?=WEBROOT?>/?controller=dette&action=dette"
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
                                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Ajout
                                    Dette</a>
                            </div>
                        </li>
                    </ol>
                </nav>

            </div>
            <div class="flex align-center justify-around  w-full ">
                <div class="w-1/2 h-40 border border-gray-200 rounded-lg shadow flex-col ">
                    <div>
                        <form action="<?=WEBROOT?>" method="post" class="flex items-center py-0">
                            <label for="" name="" class="text-black-900 mx-2">Tel</label>
                            <div class="relative w-60 mt-2">
                                <input type="text" id="simple-search" name="tel"
                                    class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                            <input type="hidden" name="controller" value="dette">
                            <button type="submit" name="action" value="addDette"
                                class="bg-sky-900 p-2.5 ms-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                OK
                            </button>
                        </form>
                    </div>
                    <div class="w-full mt-3  flex align-center justify-center ">
                        <div class="flex align-center justify-center w-60 mt-5 ">
                            <label for="" class="text-black-900 mx-2 mt-2">Prenom</label>
                            <input type="text" id="simple-search" name="prenom" value="<?= $client->prenom ?? ''; ?>"
                                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled />
                        </div>
                        <div class="flex align-center justify-center w-60 mt-5">
                            <label for="" class="text-black-900 mx-2 mt-2">Nom</label>
                            <input type="text" id="simple-search" name="nom" value="<?= $client->nom ?? ''; ?>"
                                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled />
                        </div>
                    </div>
                </div>
                <div class="w-1/2 h-40 border border-gray-200 rounded-lg shadow mx-3 flex-col ">
                    <div class="">
                        <form action="<?= WEBROOT; ?>" method="post" class="flex items-center py-0">
                            <label for="" class="text-black-900 mx-2">ref</label>
                            <div class="relative w-60 mt-2">
                                <input type="text" id="simple-search" name="ref"
                                    class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                            <input type="hidden" name="controller" value="dette">
                            <button type="submit" name="action" value="addDette"
                                class="bg-sky-900 p-2.5 ms-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                OK
                            </button>
                        </form>
                        <div class="flex align-center justify-center w-60 mt-2 ">
                            <label for="" class="text-black-900 mx-2 mt-2">Libelle</label>
                            <input type="text" id="simple-search" name="libelle" value="<?php echo $article->libelle ?? ''; ?>"
                                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled />
                        </div>
                        <div class="w-full mt-3  flex align-center justify-center ">
                            <div class="flex align-center justify-center w-60 ">
                                <label for="" class="text-black-900 mx-2 mt-2">P.Untaire</label>
                                <input type="text" id="simple-search" name="PrixU" value="<?php echo $article->prixU ?? ''; ?>"
                                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>
                            <div class="flex align-center justify-center w-60">
                                <label for="" class="text-black-900 mx-2 mt-2">QteStock</label>
                                <input type="text" id="simple-search" name="qteStock" value="<?php echo $article->qtestock ?? ''; ?>"
                                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mt-2">
                <div class="w-4/5 h-14  rounded-lg  ">
                    <div>
                        <form action="<?= WEBROOT; ?>" method="post" class="flex items-center py-0">
                            <label for="" class="text-black-900 mx-2">Qte</label>
                            <div class="relative w-96 mt-2">
                                <input type="text" id="simple-search" name=qte
                                    class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                            <input type="hidden" name="controller" value="dette">
                            <button type="submit" name="action" value="addDette"
                                class="bg-sky-900  p-2.5 ms-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                OK
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex mt-3">
                <div class="w-full h-48 border border-gray-200 rounded-lg shadow ">
                    <div class="w-full">
                        <div class=" w-3/4 relative overflow-x-auto sm:rounded-lg mx-3 mt-2">
                            <table
                                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-white uppercase bg-indigo-400 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Libelle
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
                                    <?php foreach ($tabArticle as $article): ?>
                                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                            <td class=""><?= $article['libelle'] ?></td>
                                            <td><?= $article['qte'] ?></td>
                                            <td><?= $article['prixU'] ?></td>
                                            <td><?= $article['total'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=" mx-2 mt-5">
                        <span class=" mx-2 text-green-900 text-xl font-bold">Total : <?= $total?></span>
                    </div>
                    <form action="<?=WEBROOT?>" method="post">
                        <input type="hidden" name="controller" value="dette">
                        <input type="hidden" name="montant" value="<?= $total?>">
                        <div class="w-full flex align-center justify-end">
                            <button type="submit" name="action" value="SaveDette"  class="w-48  text-white bg-sky-900  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
