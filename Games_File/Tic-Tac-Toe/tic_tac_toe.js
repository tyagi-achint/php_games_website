const random = () => {
    return Math.round(Math.random())
};
let flag = 1;
const allBtn = document.querySelector('.game-pad'),
    statusBar = document.querySelector('#Status'),

    allInput = allBtn.querySelectorAll('input'),
    restartBtn = document.querySelector('.restart-btn')
let [a1, a2, a3, a4, a5, a6, a7, a8, a9] = document.querySelectorAll('.game-pad input');
let b1, b2, b3, b4, b5, b6, b7, b8, b9;

//Show 'X' or 'O' when click the button
const valueSetting = (input) => {
    if (input.disabled) {
        return;
    }
    if (flag == 1) {
        statusBar.innerText = "Turn : O"
        statusBar.style.color = 'blueviolet'
        input.value = 'X';
        input.style.color = 'green'
        input.disabled = true;
        flag = 0;
    } else {
        statusBar.innerText = "Turn : X"
        statusBar.style.color = 'green'
        input.value = 'O';
        input.style.color = 'blueviolet'

        input.disabled = true;
        flag = 1;
    }
    checkWinner()
};

//Winning animation
const fieldMatch = (inputField) => {
    if (Array.isArray(inputField)) {
        inputField.forEach(elem => elem.style.backgroundColor = 'rgba(5, 182, 5, 0.211)')
    } else {
        allInput.forEach(elem => elem.style.backgroundColor = 'rgba(242, 13, 13, 0.221)')
    }
};

//Winner Checking Function
const checkWinner = () => {
    b1 = a1.value;
    b2 = a2.value;
    b3 = a3.value;
    b4 = a4.value;
    b5 = a5.value;
    b6 = a6.value;
    b7 = a7.value;
    b8 = a8.value;
    b9 = a9.value;

    //Check Player 'X' win
    if (b1 == 'X' && b2 == 'X' && b3 == 'X') {
        winner('X', [a1, a2, a3])
    } else if (b1 == 'X' && b4 == 'X' && b7 == 'X') {
        winner('X', [a1, a4, a7])
    } else if (b1 == 'X' && b5 == 'X' && b9 == 'X') {
        winner('X', [a1, a5, a9])
    } else if (b2 == 'X' && b5 == 'X' && b8 == 'X') {
        winner('X', [a2, a5, a8])
    } else if (b3 == 'X' && b6 == 'X' && b9 == 'X') {
        winner('X', [a3, a6, a9])
    } else if (b3 == 'X' && b5 == 'X' && b7 == 'X') {
        winner('X', [a3, a5, a7])
    } else if (b4 == 'X' && b5 == 'X' && b6 == 'X') {
        winner('X', [a4, a5, a6])
    } else if (b7 == 'X' && b8 == 'X' && b9 == 'X') {
        winner('X', [a7, a8, a9])
    }
    //Check Player 'O' win
    else if (b1 == 'O' && b2 == 'O' && b3 == 'O') {
        winner('O', [a1, a2, a3])
    } else if (b1 == 'O' && b4 == 'O' && b7 == 'O') {
        winner('X', [a1, a4, a7])
    } else if (b1 == 'O' && b5 == 'O' && b9 == 'O') {
        winner('O', [a1, a5, a9])
    } else if (b2 == 'O' && b5 == 'O' && b8 == 'O') {
        winner('O', [a2, a5, a8])
    } else if (b3 == 'O' && b6 == 'O' && b9 == 'O') {
        winner('O', [a3, a6, a9])
    } else if (b3 == 'O' && b5 == 'O' && b7 == 'O') {
        winner('O', [a3, a5, a7])
    } else if (b4 == 'O' && b5 == 'O' && b6 == 'O') {
        winner('O', [a4, a5, a6])
    } else if (b7 == 'O' && b8 == 'O' && b9 == 'O') {
        winner('O', [a7, a8, a9])
    }
    //Check not any winner
    else if ((b1 == 'X' || b1 == 'O') && (b2 == 'X' || b2 == 'O') && (b3 == 'X' || b3 == 'O') && (b4 == 'X' || b4 == 'O') && (b5 == 'X' || b5 == 'O') && (b6 == 'X' || b6 == 'O') && (b7 == 'X' || b7 == 'O') && (b8 == 'X' || b8 == 'O') && (b9 == 'X' || b9 == 'O')) {
        winner('match', false)
    }
};

//Change status & push game after any one winner or match
const winner = (winer, inputField) => {
    fieldMatch(inputField)
    if (winer == 'X') {
        statusBar.innerText = "Player 'X' won"
        statusBar.style.color = 'green'
        pause()
    } else if (winer == 'O') {
        statusBar.innerText = "Player 'O' won"
        statusBar.style.color = 'blueviolet'
        pause()
    } else {
        statusBar.innerText = "Not any winner"
        statusBar.style.color = 'red'
        statusBar.classList.add('status')
        setTimeout(restart, 3000)
    }
};

//Game pause function
const pause = () => {
    allInput.forEach(elem => elem.disabled = true)
};

//Restart function
var restart = () => {
    allInput.forEach(elem => {
        elem.value = '';
        elem.disabled = false;
        elem.classList.remove('click')
        elem.style.backgroundColor = 'rgb(232, 231, 231)'
    });
    if (flag == 1) {
        statusBar.innerHTML = "Play now <span style='color: green;'>X</span>"

    } else {
        statusBar.innerHTML = "Play now <span style='color: blueviolet;'>O</span>"
    }
    statusBar.style.color = 'black'
    statusBar.classList.remove('status')
    restartBtn.classList.remove('active')
}

//Get clicked fields
allBtn.addEventListener('click', (e) => {
    if (e.target.matches('input')) {
        let input = e.target;
        valueSetting(input)
        e.target.classList.add('click')
        restartBtn.classList.add('active')
    }
})





