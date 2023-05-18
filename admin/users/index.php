<?php require_once('../top-layout.php');
$users = [
    ['id' => 1, 'name' => 'Fiber Glass', 'email' => 'example@email.com', 'phone' => '70707070', 'date' => date('Y-m-j H:i:s')],
    ['id' => 3, 'name' => 'Base Tool', 'email' => 'example@email.com', 'phone' => '70706070', 'date' => date('Y-m-j H:i:s')],
    ['id' => 7, 'name' => 'Klein Bag ', 'email' => 'example@email.com', 'phone' => '70700070', 'date' => date('Y-m-j H:i:s')],
]; ?>
<section>
    <h2 class="text-gray-700 uppercase font-bold">Users</h2>
    <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
        <div
            class="flex flex-wrap items-center uppercase text-sm justify-around font-semibold bg-gray-400 text-white rounded-tl rounded-tr">
            <div class="w-1/12 px-4 py-3">#</div>
            <div class="w-2/12 px-4 py-3">Name</div>
            <div class="w-2/12 px-4 py-3">Email</div>
            <div class="w-2/12 px-4 py-3">Phone</div>
            <div class="w-2/12 px-4 py-3">Date</div>
            <div class="w-1/12 px-4 py-3 text-right">Actions</div>
        </div>
        <?php
        for ($i = 0; $i < count($users); $i++) {
            echo '
            <div class="flex flex-wrap  justify-around items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $users[$i]['id'] . '
                </div>
                <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $users[$i]['name'] . '
                </div>    
                <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $users[$i]['email'] . '
                </div> 
                <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $users[$i]['phone'] . '
                </div>
                <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $users[$i]['date'] . '
                </div>
                <div class="w-1/12 flex items-center justify-end px-3">
                    <form action="" method="DELETE" class="inline-flex ml-1">
                        <input type="number" value="' . $users[$i]['id'] . '" class="hidden"/>
                        <button type="submit" class="bg-red-600 block p-1 border border-red-600 rounded-sm" title="Delete">
                            <svg class="h-3 w-3 fill-current text-gray-100" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash fa-w-14" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor"
                                    d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>';
        } ?>
    </div>

</section>
<?php require_once('../footer.php') ?>