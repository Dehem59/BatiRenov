import {jsonPath, txtMapping} from "./config.js";


class EvolutiveForm {

    constructor(jsonPath, textMapping, containerBox) {
        this.jsonPath = jsonPath;
        this.textMapping = textMapping;
        this.currentState = this.jsonPath["etat"];
        this.previousState = null;
        this.containerBox = containerBox;
        this.answers = [];
        this.passedState = [];
    }

    makeState(){
        let htmlContent = `
            <h2 class="text-center">${this.currentState.name}</h2>
            <h3 class="text-center">${this.currentState.question}</h3>
        `;
        let answersEl = "";
        for (let answerKey in this.currentState.reponses){
            answersEl += `
                <button class="btn btn-primary col-md-7 mx-auto answer mt-3" data-id="${answerKey}">
                    ${this.textMapping[answerKey]}
                </button> 
            `;
        }
        htmlContent += `<div class="row">${answersEl}</div>`;
        return htmlContent;
    }

    assignUpdateEvent(){
        let btns = this.containerBox.getElementsByClassName("answer");
        for (let btn of btns){
            btn.addEventListener("click", (event) => {
                this.updateState(event.target.getAttribute("data-id"));
            })
        }
    }

    updateState(answerKey){
        this.previousState = this.currentState;
        this.currentState = this.currentState.reponses[answerKey].etat;
        this.answers.push(this.textMapping[answerKey]);
        this.passedState.push(this.previousState);
        if (this.isLastState()){
            this.containerBox.innerHTML = this.makeFinalState();
            return true;
        }
        this.setState();
        return false;
    }

    isLastState(){
        return this.currentState.isFinal;
    }

    goBackState(){
        if (this.answers.length > 0 && this.passedState.length > 0){
            this.answers.pop();
            this.passedState.pop();
            this.currentState = this.previousState;
            this.previousState = this.passedState.at(-1);
            this.setState();
        }
    }

    setState(){
        this.containerBox.innerHTML = this.makeState();
        this.assignUpdateEvent();
    }

    makeFinalState(){
        return `
            <div class='row'>
                <div class="col-md-8 mx-auto card">
                    <div class="alert alert-success text-center">
                        ${this.currentState.resultat}
                    </div>
                    <form id="finalForm col-md-8 mx-auto">
                        <div class="mb-3">
                            <label for="num" class="form-label">Numéro de téléphone</label>
                            <input type="tel" class="form-control" id="num" aria-describedby="numHelp">
                            <div id="emailHelp" class="form-text">Cette donnée restera confidentielle.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nom" class="form-label">Votre Nom</label>
                            <input type="text" class="form-control" id="nom">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success" id="submitCallback" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        `;
    }

}



window.addEventListener("load", (event) => {
    let btn = document.getElementById("start");
    btn.addEventListener("click", (event) => {
        let instance = new EvolutiveForm(jsonPath, txtMapping, document.getElementById("formEvol"));
        instance.setState();
        let goBack = document.getElementById("goBack");
        goBack.style.display = "";
        goBack.addEventListener("click", (event) => {
            instance.goBackState();
        })
    })

})