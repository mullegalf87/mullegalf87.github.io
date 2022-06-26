<div class="p-3">
    <h1>Home</h1>
    <label>Connessione al db:
        <?php

            echo connect_db(); 

        ?>
    </label>
    <div class="mt-3">
        <div class="d-flex flex-nowrap" id="add_prod">
            <input class="form-control mr-3" type="text" name="name_prod" id="name_prod" placeholder="Name Prod">
            <input class="form-control mr-3" type="text" name="price_prod" id="price_prod" placeholder="Price Prod">
            <!-- aggiungere per ogni button la classe button_click(farà da onclick) e il type_query(farà da parametro dell'onclick) -->
            <button class="btn btn-primary button_click add_prod">Add</button>
        </div>
    </div>
    <table class="table mt-3">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Command</th>
        </thead>
        <tbody id="update_prod">
            <?php
                
                $result=get_prod();
                
                for ($i=0; $i < count($result); $i++) { 

                    echo 
                    '<tr id="tr_'.$result[$i]["id"].'">
                        <td>
                        '.$result[$i]["id"].'
                        </td>
                        <td>
                            <input class="form-control" id="input_name_prod_'.$result[$i]["id"].'" value="'.$result[$i]["name_prod"].'">
                        </td>
                        <td>
                            <input class="form-control" id="input_price_prod_'.$result[$i]["id"].'" value="'.$result[$i]["price_prod"].'">
                        </td>
                        <td>
                            <button class="btn btn-secondary button_click update_prod" id_prod="'.$result[$i]["id"].'">Update</button>
                        </td>
                        <td>
                            <button class="btn btn-danger button_click delete_prod" id_prod="'.$result[$i]["id"].'">Delete</button>
                        </td>
                    </tr>';

                }
      
            ?>
        </tbody>
    </table>
</div>