
<div class="p-4 sm:ml-48">
    <div class="p-2  rounded-lg dark:border-gray-700 mt-9 h-full">
        <h5 class="font-medium text-lg">Dashboard</h5>
    </div>
    <div class="w-full flex align-center justify-around">
        <div class="w-64 h-32 shadow border-l-2 border-blue-900">
                <h5 class="font-medium text-lg mt-2 mb-2 text-center">Le nombre de Client :</h5>
                <h1 class="text-center mt-4 text-5xl text-slate-400"><?=$datas[0]->Client?></h1>
        </div>
        <div class="w-64 h-32 shadow border-l-2 border-x-red-600">
            <h5 class="font-medium text-lg mt-2 mb-2 text-center">Dette Du Jour :</h5>
            <h1 class="text-center mt-4 text-5xl text-slate-400"><?=$detteCount[0]->nombreDettes?></h1>
        </div>
        <div class="w-64 h-32 shadow border-l-2 border-x-yellow-400">
            <!-- <h5 class="font-medium text-lg mt-2 mb-2 text-center">Le nombre de Client :</h5>
            <h1 class="text-center mt-4 text-5xl text-slate-400">07</h1> -->
        </div>
    </div>
</div>