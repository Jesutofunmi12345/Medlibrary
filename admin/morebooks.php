<?php 
//session_start();
include ('header.php'); 
 //$db = mysqli_connect('localhost', 'root', '', 'fct_library');
 $email=$_SESSION['login_user1'];
$query=mysqli_query($conn,"SELECT  * from admin where email='$email' ") or die(mysqli_error());
$row=mysqli_fetch_array($query);
//$_SESSION["user_type"]=$row['user_type'];
?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home /</small>More Resources
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="image-layout">
                <!--<div class="x_panel">-->
                    <!--<div class="x_title">
                    <div class="clearfix"></div>-->
                    <!--<div class="x_content">-->

                         <style>
                            
                            h1.top{
                                font-family: Garamond;
                                font-size: 60px;
                                font-weight: bold;
                                margin-left:30px;
                                color:red;
                                margin-top:90px;
                                padding:5px;
                                text-align: center;

                            }
                            .form-control {
                                    min-height: 45px;
                                    box-shadow: none !important;
                                    }

                                    .input-group {
                                        width:70%;
                                        margin: auto;
                                        border:none;

                                    }

                                    h4{
                                          color:#8b8b83;
                                          font-family: verdana;
                                          font-size: 15px;
                                        margin-left: 80px;
                                        }


                                          h1.sub
                                          {
                                          color:skyblue;
                                          font-family:Times, verdana, sans-seriff;
                                          font-size: 44px;
                                          margin-left:400px;
                                          font-weight:bold;
                                          margin-bottom:10px;

                                          }

                                         
                                          h2.sub
                                          {
                                          color:red;
                                          font-family:Times;
                                          font-size: 18px;
                                          margin-left: 400px;
                                          font-weight:bold;
                                          margin-bottom:10px;

                                          }


                                       /* .row{
                                          padding : 2px;
                                        }*/


                                        .img{
                                          margin-left: 40px;
                                          min-height:225px;
                                          padding-top:3px;
                                        }


                                        .results{
                                      text-decoration: none;
                                      margin-bottom: -7px;
                                      text-align:center;
                                      margin-left: 50px;

                                          }


                                        #book1,#book2,#book3,
                                        #book4,#book5,#book6,
                                        #book7,#book8,#book9,
                                        #book10,#book11,#book12,
                                        #book13,#book14,#book15,
                                        #book16,#book17,#book18,
                                        #book19,#book20{
                                          background-color: #f0f8ff;
                                        }

                                        .image-layout{
                                          background-image:url("img/book-stack.jpg");
                                          background-color:#017199;
                                          height:1000px;
                                          background-position: center;
                                          background-repeat: no-repeat;
                                          background-size: cover;
                                          margin-top:-40px;
                                          margin-bottom:100px;
                                          background-attachment: fixed;
                                        }


                                        img.icon{
                                          height:150px;
                                          width:200px;
                                          margin-top:150px;
                                          margin-left: 400px;
                                          padding:10px;
                                          margin-bottom:10px;

                                        }
                                        .row{
                                          width:100%;


                                        }

                                </style>


<body>
  
           <!--<div><img class="icon" src="images/tophumy.png"></div>-->
           <h1 class="sub">MedLibrary</h2>
           <h2 class="sub">Explore more books...</h2>
          <div class="input-group input-group-lg">
           <input type="text" class="form-control" id="books" placeholder="Search books...">
            <div class="input-group-btn">
              <button class="btn btn-danger" id="button" type="button">
                <i class="glyphicon glyphicon-search"></i>SEARCH
              </button>
                    </div>
          </div>


            <div id="results"></div>
    
                

 <div class="row">
          <div class="col-md-4  col-md-offset-1"  id="book1">
          </div>
          <div class="col-md-4  col-md-offset-2" id="book2">
          </div>
                   
          <div class="col-md-4 col-md-offset-1" id="book3">
          </div>
          <div class="col-md-4 col-md-offset-2" id="book4">
          </div>
     
          <div class="col-md-4 col-md-offset-1" id="book5">
          </div>
          <div class="col-md-4 col-md-offset-2" id="book6">
          </div>
      
          <div class="col-md-4 col-md-offset-1" id="book7">
          </div>
          <div class="col-md-4 col-md-offset-2" id="book8">
          </div>
      
          <div class="col-md-4 col-md-offset-1" id="book9">
          </div>
          <div class="col-md-4 col-md-offset-2" id="book10">
          </div>

          <div class="col-md-4 col-md-offset-1" id="book11">
          </div>
          <div class="col-md-4 col-md-offset-2" id="book12">
          </div>


          <div class="col-md-4 col-md-offset-1" id="book13">
          </div>
          <div class="col-md-4 col-md-offset-2" id="book14">
          </div>

          <div class="col-md-4 col-md-offset-1" id="book15">
          </div>
          <div class="col-md-4 col-md-offset-2" id="book16">
          </div>

          <div class="col-md-4 col-md-offset-1" id="book17">
          </div>
          <div class="col-md-4 col-md-offset-2" id="book18">
          </div>


          <div class="col-md-4 col-md-offset-1" id="book19">
          </div>
          <div class="col-md-4 col-md-offset-2" id="book20">
          </div>
          
      </div>            


</body>



<script>
                        
    function bookSearch(){
    var search = document.getElementById('books').value
    document.getElementById('results').innerHTML = ""
    //console.log(search)

    clearPrevious();
     $.ajax({
        url:"https://www.googleapis.com/books/v1/volumes?q=" +search, 
        dataType:"json",

        success: function(data){
            console.log(data)
            for(i= 0; i < data.items.length; i++){
               var booki = 'book'+(i+1)

                var imgRow = document.createElement('div')
               imgRow.className = "row imgRow"
               document.getElementById(booki).appendChild(imgRow)
                document.getElementById(booki).appendChild(imgRow)


                 var titleRow = document.createElement('div')
            titleRow.className = "row titleRow"
               //title column
                var titleDiv = document.createElement('div')
                titleDiv.className = "col-md-12 title"
                  titleRow.appendChild(titleDiv)

             document.getElementById(booki).appendChild(titleRow)


                 var authorRow = document.createElement('div')
            authorRow.className = "row authorRow"
               //author column
                var authorDiv = document.createElement('div')
                authorDiv.className = "col-md-12 author"
                authorRow.appendChild(authorDiv)

                document.getElementById(booki).appendChild(authorRow)


                 var publisherRow = document.createElement('div')
            publisherRow.className = "row publisherRow"
               //publisher column
                var publisherDiv = document.createElement('div')
                publisherDiv.className = "col-md-12 publisher"
                publisherRow.appendChild(publisherDiv)

                document.getElementById(booki).appendChild(publisherRow)




                 var resultsRow = document.createElement('results')
            resultsRow.className = "row resultsRow"
               //button column
                var resultsDiv = document.createElement('results')
                resultsDiv.className = "col-md-4 results"
                resultsRow.appendChild(resultsDiv)

                document.getElementById(booki).appendChild(resultsRow)


             /*     var buttonRow = document.createElement('div')
            buttonRow.className = "row buttonRow"
               //button column
                var buttonDiv = document.createElement('div')
                buttonDiv.className = "col-md-12 button"
                buttonRow.appendChild(buttonDiv)

                document.getElementById(booki).appendChild(buttonRow))*/


                  //populate the rows with the data
            //image data
            var img = document.createElement('img')
            img.src = data.items[i].volumeInfo.imageLinks.smallThumbnail
             document.getElementsByClassName('imgRow')[i].appendChild(img)

             //title data
            var title = document.createElement('h4')
            title.innerHTML =  'Title:' + data.items[i].volumeInfo.title
            document.getElementsByClassName('title')[i].appendChild(title)


            //author data
            var author = document.createElement('h4')
            author.innerHTML = 'By:' + data.items[i].volumeInfo.authors
            document.getElementsByClassName('author')[i].appendChild(author)

            //publisher data
            var publisher = document.createElement('h4')
            publisher.innerHTML = 'Published by:' + data.items[i].volumeInfo.publisher
            document.getElementsByClassName('publisher')[i].appendChild(publisher)

             //button data
           var results = document.createElement('results')
            results.innerHTML += '<a href = " '+data.items[i].volumeInfo.infoLink+ ' "><button class="btn btn-success" id="button" type="button">Read More</button></a></br> </br>';
            document.getElementsByClassName('results')[i].appendChild(results)


            //button data
            /*var button = document.createElement('link')
            results.innerHTML += '<a href = " '+data.items[i].volumeInfo.infoLink+ ' "><button class="btn btn-info" id="button" type="button">Read More</button></a></br> </br>';
            document.getElementsByClassName('button')[i].appendChild(button))*/
                    
                //results.innerHTML += "<h2>" + data.items[i].volumeInfo.title +"</h2>"
                //results.innerHTML += "<h5>" + data.items[i].volumeInfo.authors +"</h5>"
                //results.innerHTML += "<h5>" + data.items[i].volumeInfo.publisher +"</h5>"
                //results.innerHTML += "<h5>" + data.items[i].volumeInfo.isbn +"</h5>"
                
                //results.innerHTML += "<h5>" + data.items[i].volumeInfo.infoLink + "</h5>"
            //results.innerHTML = "<a href = ' " + data.items[i].volumeInfo.infoLink + " '>" Link +"</a>"


                //results.innerHTML += <a href '= + data.items[i].accessInfo.webReaderLink + '>
                //<button id ="imagebutton" class="btn red aligning">Read More</button></a>
                //<button id ="imagebutton" class="btn red aligning">Read More</button>
                //results.innerHTML += "<h5>" + data.items[i].accessInfo.webReaderLink +"</h5>"


            }
        },

        type:'GET'

     });

}
document.getElementById('button').addEventListener('click', bookSearch, false)

    function clearPrevious(){
    for(i=0; i<10; i++){
        var booki = 'book'+(i+1)
        
        //delete rows
        //images row
        removeElementsByClass('imgRow')

        //title and price row
        removeElementsByClass('titlePriceRow')   

        //author row
        removeElementsByClass('authorRow')   

        //description row
        removeElementsByClass('publisherRow')

         //button row
        removeElementsByClass('resultsRow')
  
    }//end for loop
}//end clearPrevious function

function removeElementsByClass(className){
    var elements = document.getElementsByClassName(className);
    for(j=0; j<elements.length; j++){
        elements[0].parentNode.removeChild(elements[0]);
    }
}
</script>
                    



</div>

                           <!-- </div>-->
                <!--</div>-->
            </div>
        </div>

<?php include ('footer.php'); ?>