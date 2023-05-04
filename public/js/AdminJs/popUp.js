const section = document.querySelector(".add"),
        overlay = document.querySelector(".overlay"),
        showBtn = document.querySelector(".show-modal"),
        editBtn = document.querySelector(".edit-modal"),
        closeBtn = document.querySelector(".close-btn");
        deletee = document.querySelector(".delete");


      showBtn.addEventListener("click", () => section.classList.add("active"));
    
      overlay.addEventListener("click", () =>
        section.classList.remove("active")
      );
     

      closeBtn.addEventListener("click", () =>
        section.classList.remove("active")
      );

      function popUp(id){
      
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will id"+id+"",
          icon: "warning",
          buttons: true,
          dangerMode: true,
          
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "delete/"+id+""
            swal("Poof! Your imaginary file has been deleted!", {
              icon: "success",

            });
          } else {
            swal("Your imaginary file is safe!");
          }
        });
      
      }

      function popUp2(id){
      
        swal({
          title: "Are you want to edit this referee?",
        
          buttons: true,
          
          
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "edit/"+id+""
            
          } else {
            swal("Your imaginary file is safe!");
          }
        });
      
      }

      function popUpSuccee(){
      
        swal("Good job!", "You clicked the button!", "success");
      
      }
