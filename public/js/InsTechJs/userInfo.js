let user_name = sessionStorage.getItem("name");
let user_points = sessionStorage.getItem("points");
let user_time = sessionStorage.getItem("time");
document.querySelector("span.name").innerHTML = user_name;
document.querySelector("span.points").innerHTML = user_points;
document.querySelector("span.time_taken").innerHTML = user_time;
   
$.ajax({
    url : "/add_note",
    type: "GET",
    data: {
      "note":user_points,
      "time":user_time,
      "test_id":test_id,
      "arbitre_id":arbitre_id
    },
    dataType: 'json',
    success:function(response) {
          alert("Succesfully test created");
    }
});
      
