
  $('.total-row').hide(); 
  
  
  function itemIncrease(){

        $(".itemCount").val(parseInt($(".itemCount").val()) + 1);

   }

  $('.cart-button').click(function(){

    let amount = $('#badge').html();
    $('#badge').html(parseInt(amount) + 1);

    let that = $(this);
    let name = that.data('name');
    let price = that.data('price');
    let src = that.data('src');

    let table = $("#basketTable");
    let tbody = table.find('tbody');

    $('#basketMessage').remove();
    $('.total-row').show();

    let tr = $(`
        <tr>
            <td rowspan="3"> <img style="height:300px; width: auto;" src="${src}"/></td>
            <td style="vertical-align:middle;">${name}</td>
        </tr>
        <tr>
            <td style="vertical-align:middle;">$${price}</td>
        </tr>
        <tr>
            <td style="vertical-align:middle; class="text-center;">
                <button>-</button><input type="number" class="w-25 itemCount" value="1" readonly><button onclick="itemIncrease();">+</button>
            </td>
        </tr>
    `);

    tbody.prepend(tr);

    let totalHolder = $('#totalBasketPrice');
    let totalValue = totalHolder.html();

    totalHolder.html(parseInt(totalValue) + parseInt(price));
    
    


  })



