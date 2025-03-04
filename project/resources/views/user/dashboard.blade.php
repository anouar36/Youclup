<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/quizz.css') }}">
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 10px 20px;
    color: white;
}

.logo {
    font-size: 24px;
}

.menu-icon {
    display: none;
    font-size: 30px;
    cursor: pointer;
}

.nav-links ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.nav-links ul li {
    margin-left: 20px;
}

.nav-links ul li a, .nav-links ul li button {
    color: white;
    text-decoration: none;
    background: none;
    border: none;
    font-size: 16px;
    cursor: pointer;
}

.nav-links.active {
    display: block;
}

.nav-links {
    display: flex;
}

@media screen and (max-width: 768px) {
    .menu-icon {
        display: block;
    }

    .nav-links {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #333;
        width: 100%;
        height: 100vh;
        align-items: center;
        justify-content: center;
    }

    .nav-links ul {
        flex-direction: column;
        align-items: center;
    }

    .nav-links.active {
        display: flex;
    }
}

    </style>



<div class="widget-wrap">
    <h1>SIMPLE JS QUIZ</h1>
    <div id="quizWrap"></div>
</div>

<form id="logout-form" action="{{ route('') }}" method="POST" style="display: none;">
    @csrf
</form>

<script>
    var quizData = @json($QuizzsArr);

    var quiz = {
    data: quizData, 
    hWrap: null,
    hQn: null,
    hAns: null,
    now: 0,
    score: 0,

    init: () => {
        quiz.hWrap = document.getElementById("quizWrap");
        quiz.hQn = document.createElement("div");
        quiz.hQn.id = "quizQn";
        quiz.hWrap.appendChild(quiz.hQn);
        quiz.hAns = document.createElement("div");
        quiz.hAns.id = "quizAns";
        quiz.hWrap.appendChild(quiz.hAns);
        quiz.draw();
    },

    draw: () => {
        if (quiz.now >= quiz.data.length) {
            quiz.hQn.innerHTML = `You have answered ${quiz.score} of ${quiz.data.length} correctly.`;
            quiz.hAns.innerHTML = "";
            return;
        }

        quiz.hQn.innerHTML = quiz.data[quiz.now].q;
        quiz.hAns.innerHTML = "";
        quiz.data[quiz.now].o.forEach((option, i) => {
            let radio = document.createElement("input");
            radio.type = "radio";
            radio.name = "quiz";
            radio.id = "quizo" + i;
            quiz.hAns.appendChild(radio);

            let label = document.createElement("label");
            label.innerHTML = option;
            label.setAttribute("for", "quizo" + i);
            label.dataset.idx = i;
            label.addEventListener("click", () => quiz.select(label));
            quiz.hAns.appendChild(label);
        });
    },

    select: (option) => {
        let all = quiz.hAns.getElementsByTagName("label");
        for (let label of all) {
            label.removeEventListener("click", quiz.select);
        }

        let correct = option.dataset.idx == quiz.data[quiz.now].a;
        if (correct) {
            quiz.score++;
            option.classList.add("correct");
        } else {
            option.classList.add("wrong");
        }

        quiz.now++;
        setTimeout(() => quiz.draw(), 1000);
    },

    reset: () => {
        quiz.now = 0;
        quiz.score = 0;
        quiz.draw();
    }
};

window.addEventListener("load", quiz.init);

</script>

</body>
</html>
