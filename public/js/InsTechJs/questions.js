// creating an array and passing the number, questions, options, and answers
let questions = [];
for (let index = 0; index < test_questions.length; index++) {
  let qst = test_questions[index];
  questions.push({
    numb:qst.id,
    question:qst.question,
    answer:qst.ans,
    options:[qst.a,qst.b,qst.c,qst.d]
  });
}
/*function shuffle(array) {
  let currentIndex = array.length,  randomIndex;

  // While there remain elements to shuffle.
  while (currentIndex != 0) {

    // Pick a remaining element.
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    // And swap it with the current element.
    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex], array[currentIndex]];
  }

  return array;
}
shuffle(questions)
console.log(questions);*/