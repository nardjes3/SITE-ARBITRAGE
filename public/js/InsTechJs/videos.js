// creating an array and passing the number, questions, options, and answers
/*let videos = [];
for (let index = 0; index < test_videos.length; index++) {
  let vid = test_videos[index];
  videos.push({
    numb:vid.id,
    video:vid.video,
    answer:vid.ans,
    options:[vid.a,vid.b,vid.c,vid.d]
  });
}
console.log(videos);*/

let questions = [];
for (let index = 0; index < videos.length; index++) {
  let qst = videos[index];
  questions.push({
    numb:qst.id,
    question:qst.video,
    answer:qst.ans,
    options:[qst.a,qst.b,qst.c,qst.d]
  });
}
/*let questions = [
  {
    id: 1,
    question: "Pleas choos the correct question",
    answer: "Yellow Card",
    options: [
      "No Card",
      "No Faul",
      "Yellow Card",
      "Red Card"
    ]
  },
  {
    id: 2,
    question: "What is the full form of CPU?",
    answer: "Penalty kick",
    options: [
      "Direct Free kick",
      "Indirect Free kick",
      "Penalty kick",
      "Red Card"
    ]
  },
  {
    id: 3,
    question: "What is the full form of E-mail",
    answer: "Red Card",
    options: [
      "No Faul",
      "Red Card",
      "Indirect Free kick",
      "Yellow Card"
    ]
  }
];*/

let question_count = 0;
let points = 0;

window.onload = function() {
  show(question_count);

};

function next() {

   
  // if the question is last then redirect to final page
  if (question_count == questions.length - 1) {
    sessionStorage.setItem("time", time);
    clearInterval(mytime);
    $.ajax({
      url : "/add_note",
      type: "GET",
      data: {
        "note":points,
        "time":time,
        "test_id":test_id,
        "arbitre_id":arbitre_id
      },
      dataType: 'json',
      success:function(response) {
            alert("Succesfully test created");
      }
  });
    location.href = "/end_vid";
  }
  console.log(question_count);

  let user_answer = document.querySelector("li.option.active").innerHTML;
  // check if the answer is right or wrong
  if (user_answer == questions[question_count].answer) {
    points += 5;
    sessionStorage.setItem("points", points);
  }
  console.log(points);

  question_count++;
  show(question_count);
}

function show(count) {
  let question = document.getElementById("questions");
  let [first, second, third, fourth] = questions[count].options;
  document.getElementById("video_bd").innerHTML = `<video id="video" controls width="60%">
  <source src="${public_path}/upload/${questions[count].question}" type="video/mp4">
</video>`;
  question.innerHTML = `
  
   <ul class="option_group">
  <li class="option">${first}</li>
  <li class="option">${second}</li>
  <li class="option">${third}</li>
  <li class="option">${fourth}</li>
</ul> 
  `;
  toggleActive();
}

function toggleActive() {
  let option = document.querySelectorAll("li.option");
  for (let i = 0; i < option.length; i++) {
    option[i].onclick = function() {
      for (let i = 0; i < option.length; i++) {
        if (option[i].classList.contains("active")) {
          option[i].classList.remove("active");
        }
      }
      option[i].classList.add("active");
    };
  }
}
