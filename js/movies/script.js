

function clickme() {
  console.log('You clicked me');
}
let intervalFunction;
let count = 0;
window.onload = function () {
  intervalFunction = setInterval(function () {
    if (typeof document.getElementsByClassName('btn-primary')[0] != "undefined") {
      document.getElementsByClassName('btn-primary')[0].click();
      count++;
      if (count === 2) {
        console.log("Now you have clicked me 10 times!! let me take a break")
        clearInterval(intervalFunction)
      }
    }
  }, 1000);
}

$(document).ready(() =>
{
	var x = document.getElementById("idSearch");
    var y = document.getElementById("titleSearch");
    var z = document.getElementById("yearSearch");
    



   	$('#btn-titleSearch').click( () =>
	{
		if($("#input-title").val() == "" || $("#input-title").val() == null)
		{
			
		}
		else
		{
			getAllData();
		}
		
		$("#input-title").val('');
	});


	$('#btn-idSearch').click( () =>
	{
		if($("#input-id").val() == "" || $("#input-id").val() == null)
		{
			
		}
		else
		{
			getAllData();
		}
		
		$("#input-idSearch").val('');
	});


	$('#btn-yearSearch').click( () =>
	{
		if($("#input-title2").val() == "" || $("#input-title2").val() == null)
           {
               
           }
           else if($("#input-year").val() == "" || $("#input-year").val() == null)
           {
               
           }
		else
		{
			getAllData();
		}
		
		$("#input-title2").val('');
		$("#input-year").val('');
	});
});

//get data of movies searched for
let getAllData = () =>
{
	let title = $("#input-title").val() || $("#input-title2").val();
	let id = $("#input-id").val();
	let year = $("#input-year").val();

	$.ajax
	({
		type: 'GET',
		dataType: 'json',
		async: true,
		url: 'https://www.omdbapi.com/?t='+title+'&i='+id+'&y='+year+'&apikey=63694ae1',
		success: (response) =>
		{
			if(response.Response == "True") //if movie details found
			{
				console.log(response);
				$(".table").show();
				$("#plot").text(response.Plot);
				$("#name").text(response.Title);
				$("#year").text(response.Year);
				$("#prodHouse").text(response.Production);
				$("#lang").text(response.Language);
				$("#country").text(response.Country);
				$("#release").text(response.Released);
				$("#runTime").text(response.Runtime);
				$("#actor").text(response.Actors);
				$("#director").text(response.Director);
				$("#writer").text(response.Writer);
				$("#awards").text(response.Awards);
				$("#boxOffice").text(response.BoxOffice);
				$("#imdbId").text(response.imdbID);
				$("#imdbRate").text(response.imdbRating);
				$("#imdbVotes").text(response.imdbVotes);
				$('img').show();	

				//if movie image is available
				if(response.Poster != "N/A")
				{
					$("#movieImage").attr('src',response.Poster);
				}

				//if movie image is not avaialable
				if(response.Poster == "N/A")
				{
					$("#movieImage").attr('src','not-found.png');
				}
			}

			else //if movie details not found
			{
				
			}
		},

		error: (err) =>
		{

            console.log("some error occured");
        },

		complete: () =>
		{
			console.log("Movie Details Found");
		}
	}); //end of ajax request
}