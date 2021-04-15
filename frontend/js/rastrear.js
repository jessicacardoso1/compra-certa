/* JavaScript para incluir. */

jQuery.fn.extend({
    stepProgressBar: function(currentStep) {
        currentStep = currentStep || this.currentStep() || 1;
        let childs = this
                .addClass("step-progress-bar")
                .find("li")
                .removeClass("step-past step-present step-future");

        childs.find(".content-stick").removeClass("step-past step-future");

        let size = childs.length < 1 ? 100 : 100 / childs.length;
        childs.css("width", size + "%");

        for (let i = 0; i < childs.length; i++) {
            let child = $(childs[i]);
            if (child.find("span.content-wrapper").length === 0) {
                child.wrapInner("<span class='content-wrapper'></span>");
                if (i > 0) child.append("<span class='content-stick'></span>");
                child.prepend("<span class='content-bullet'>" + (i + 1) + "</span>");
            }
            let stepName = i < currentStep - 1 ? "step-past"
                    : i === currentStep - 1 ? "step-present"
                    : "step-future";
            child.addClass(stepName);
            if (i > 0) {
                let stickName = stepName === "step-present" ? "step-past" : stepName;
                child.find(".content-stick").addClass(stickName);
            }
            child.css("z-index", childs.length - i);
            child.find(":before").css("z-index", childs.length - i + 2);
        }
        return this;
    },

    currentStep: function() {
        var childs = this.find("li");
        for (let i = 0; i < childs.length; i++) {
            if ($(childs[i]).is(".step-present")) return i + 1;
        }
        return 1;
    },

    countSteps: function() {
        return this.find("li").length;
    },

    isFirstStep: function() {
        return this.countSteps() === 1;
    },

    isLastStep: function() {
        return this.countSteps() === this.currentStep();
    },

    previousStep: function() {
        if (!this.isFirstStep()) this.stepProgressBar(this.currentStep() - 1);
    },

    nextStep: function() {
        if (!this.isLastStep()) this.stepProgressBar(this.currentStep() + 1);
    },

    rewind: function() {
        this.stepProgressBar(1);
    },

    fastForward: function() {
        this.stepProgressBar(this.countSteps());
    },

    controlProgressBar: function(progressBar) {
        let rewind = function() { progressBar.rewind(); };
        let next = function() { progressBar.nextStep(); };
        let previous = function() { progressBar.previousStep(); };
        let fastForward = function() { progressBar.fastForward(); };
        this.empty();
        $("<input type='button' class='step-progress-bar-button rewind' value='⏪' />").on('click', rewind).appendTo(this);
        $("<input type='button' class='step-progress-bar-button previous' value='◀️' />").on('click', previous).appendTo(this);
        $("<input type='button' class='step-progress-bar-button next' value='▶' />").on('click', next).appendTo(this);
        $("<input type='button' class='step-progress-bar-button fast-forward' value='⏩' />").on('click', fastForward).appendTo(this);
        return this;
    }
});

/* JavaScript na página. */

$("#barra-simples-1").stepProgressBar();
$("#barra-simples-2").stepProgressBar();
$("#barra-simples-3").stepProgressBar(3);

let pb = $("#barra-controle-basico").stepProgressBar(2);
$("#controle-basico").controlProgressBar(pb);

$("#controle-macarrao").controlProgressBar($("#barra-macarrao").stepProgressBar(4));

let ca = $("#barra-controle-personalizado").stepProgressBar(1);
let cb = $("#controle-personalizado").controlProgressBar(ca);
cb.find(".rewind, .fast-forward").remove();

$("#cores-personalizadas").stepProgressBar(4);

let temp = $("#cores-temperatura").stepProgressBar(3);
$("#controle-temperatura").controlProgressBar(temp);