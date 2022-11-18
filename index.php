<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="styling.css">
    <title>What IF </title>
  </head>
  <body>
    <div class="d-flex justify-content-center">
      <div>
        <div id="title">
          <h1>CALCULATE YOUR P&L</h1>
        </div>


        <div id="formIn" class="center border border-3 border-dark rounded-3">
            <form autocomplete="off" id="info">
              <div class="autocomplete">
                <input id="myInput" class="input" type="text" name="theCurr" placeholder="coin">
              </div>

              <div id="containing" class="row" >

                <div class="col-8 p-0">
                  <input id="myInput2" class="input1" type="number" placeholder="amount invested" min="0" name="amnt">
                </div>
                
                <div class="col p-0">
                  <select class="form-select" name="selector" >
                    <option selected value="coin">COIN</option>
                    <option value="usd">usd</option>
                    <option value="aud">aud</option>
                    <option value="zar">zar</option>
                    <option value="gbp">gbp</option>
                    <option value="jpy">jpy</option>
                  </select> 
                </div>
              </div>


              <div>
                <input type="date" class="input" id="when" name="when">
              </div>

              <div>
                <input type="submit" class="input">
              </div>
          </form>
        </div>

      <div id="result" class="bdr d-flex justify-content-center">
     
      </div>

      <div id="container2">

      </div>



    </div>
   
   


  </div>
 


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>