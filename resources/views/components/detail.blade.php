<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .plus-minus-input {
  align-items: center;

  .input-group-field {
    text-align: center;
    margin-left: 0.5rem;
    margin-right: 0.5rem;
    padding: 1rem;

    &::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
      appearance: none;
    }
  }

  .input-group-button {
    .circle {
      border-radius: 50%;
      padding: 0.25em 0.8em;
    }
  }
}


    </style>
</head>
<body>
<div class="bg-white py-10  mt-10 ml-10 mr-5 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="max-w-6xl mx-10 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-2">
                <div class="h-[460px] rounded-lg bg-white dark:bg-gray-700 mb-4">
                    <img class="w-full h-full object-cover" src="https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png" alt="Product Image">
                </div>
            </div>
            <div class="md:flex-1 px-4">
            <p class="text-gray-600 dark:text-gray-300 text-sm">
                Leila Chudori
                </p>
                <h2 class="text-2xl font-bold text-blue-900 dark:text-white mb-2">Laut Bercerita</h2>
                <div class="mb-4">
                    <span class="font-bold text-gray-700 dark:text-gray-300 justify-center">Deskripsi Buku</span>
                    <div class="flex items-center">
                    Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur.
                </p>
                    </div>
                </div>
                <div class="container flex flex-col">
                    <span class="font-bold text-gray-700 dark:text-gray-300">Detail Buku</span></div>
                    <div class="mb-4">
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        <span class="font-semibold text-gray-700 dark:text-gray-300 mt-4">Jumlah Halaman</span>
                        <p class="font-semibold text-gray-700 dark:text-gray-300 text-xs mb-2">379 halaman</p>
                        <span class="font-semibold text-gray-700 dark:text-gray-300 mt-4">Tanggal Terbit</span>
                        <p class="font-semibold text-gray-700 dark:text-gray-300 text-xs mb-2">23 Oktober 2017</p>
                        <span class="font-semibold text-gray-700 dark:text-gray-300 mt-4">ISBN</span>
                        <p class="font-semibold text-gray-700 dark:text-gray-300 text-xs mb-2">9786024246945</p>
                        <span class="font-semibold text-gray-700 dark:text-gray-300 mt-4">Bahasa</span>
                        <p class="font-semibold text-gray-700 dark:text-gray-300 text-xs mb-2">Indonesia</p>
                    </p>
                    </div>
                </div>
                <div class="flex mx-2 mb-4">
                    <div class="md:flex-1">
                        <div class="px-2">
                        <p class="font-semibold text-gray-700 dark:text-gray-300 mt-4 mb-2">Review Buku</p>
                        <div>
                        <i class='bx bxs-star bx-md text-blue-900'></i>
                        <i class='bx bxs-star bx-md text-blue-900'></i>
                        <i class='bx bxs-star bx-md text-blue-900'></i>
                        <i class='bx bxs-star bx-md text-blue-900'></i>
                        <i class='bx bxs-star bx-md text-gray-200'></i>
                        </div>
                        <div class="px-2">
                        <p class="font-semibold text-gray-700 dark:text-gray-300 mt-4 mb-2">Jumlah Stok</p></div>
                        <div class="input-group plus-minus-input">
                            <div class="input-group-button">
                                <button type="button" class="button hollow circle" data-quantity="minus" data-field="quantity">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                            </div>
                            <input class="input-group-field" type="number" name="quantity" value="0">
                            <div class="input-group-button">
                                <button type="button" class="button hollow circle" data-quantity="plus" data-field="quantity">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-2 mt-2">
                        <button class="w-full px-2 bg-blue-900 text-white py-2 px-4 rounded-lg font-bold hover:bg-blue-300">Tambah Keranjang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    jQuery(document).ready(function(){
    // This button will increment the value
    $('[data-quantity="plus"]').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus"]').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});


</script>