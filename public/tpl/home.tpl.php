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
        </thead>
        <tbody>
            <?php
                
                $result=get_prod();


                for ($i=0; $i < count($result); $i++) { 
                    echo $result["id"];
                }
                // if ($result->num_rows > 0) {
                //     // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                //     }
                // } else {
                //     echo "0 results";
                // }
            ?>
        </tbody>
    </table>
</div>