//Input domain name field changes everytime something changes in input name field.
$("#inputName").on("change paste keyup", function() {
    $('#inputDomainName').val($(this).val());
})

//Function to detect enter key and runs it.
$('#inputName').keydown(function (e){
    if(e.keyCode == 13){
        $('#inputName').blur();
        runAbnAndDomainCheck();
    }
})

//Running both buttonNameCheck and buttonDomainCheck.
function runAbnAndDomainCheck() {
    buttonNameCheck();
    buttonDomainCheck();
    $('#btnGetStarted').css('visibility','collapse');
}

//Function to unhide the terms and condition page.
function unHideTnCPage() {
    $('#termsandconditions').removeClass('hide');
}

//Function to hide the terms and condition page.
function hideTnCPage() {
    $('#termsandconditions').addClass('hide');
}

function calcDistanceToCenterElement() {
    leftElement =  $('#pageTopNav').get(0).getBoundingClientRect();
    rightElement = $('#btnGetStarted').get(0).getBoundingClientRect();

    leftDistance = (leftElement.right + rightElement.left)/2 -120 - $('#pageTopNav').width() - 30;
    rightDistance = leftDistance;
    console.log(leftElement.right);

    $('#stepsNav').css({'margin-left':leftDistance});
    $('#stepsNav').css({'margin-right':rightDistance});
}


function websiteCriterionSelectionChange() {
    var selectBox = document.getElementById("websiteCriterionSelection");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    console.log(selectedValue);

    if (selectedValue == "0") {
        $('#onlineServiceProviders').removeClass('hide');
        $('#offlineServiceProviders').addClass('hide');
        $('#learnMore').addClass('hide');
    } else if (selectedValue == "1") {
        $('#offlineServiceProviders').removeClass('hide');
        $('#onlineServiceProviders').addClass('hide');
        $('#learnMore').addClass('hide');
        $('#autocomplete').focus();
    } else if (selectedValue == "2") {
        $('#onlineServiceProviders').addClass('hide');
        $('#offlineServiceProviders').addClass('hide');
        $('#learnMore').removeClass('hide');
    }
}



 var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

function showPaymentGateway() {
    $('#paymentgateway').removeClass('hide');
    $('#shipping').addClass('hide');
    $('#trademark').addClass('hide');
}

function showShipping() {
    $('#paymentgateway').addClass('hide');
    $('#shipping').removeClass('hide');
    $('#trademark').addClass('hide');
}

function showTrademark() {
    $('#paymentgateway').addClass('hide');
    $('#shipping').addClass('hide');
    $('#trademark').removeClass('hide');
}




//------- Navigation functions for progress timeline -----------

//Function to navigate from step 1 to 2
function step1to2() {
    percent = 20;
    $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
    $(".progress-completed").text(percent + "%");

    $('#div1').removeClass("activestep");
    $('#div2').addClass("activestep");

    $('#step-1').removeClass("activeStepInfo");
    $('#step-2').addClass("activeStepInfo");
    $('#step-1').addClass("hiddenStepInfo");

    scrollToTopMain();
}

//Function to navigate from step 2 to 3
function step2to3() {
    percent = 40;
    $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
    $(".progress-completed").text(percent + "%");

    $('#div2').removeClass("activestep");
    $('#div3').addClass("activestep");

    $('#step-2').removeClass("activeStepInfo");
    $('#step-3').addClass("activeStepInfo");
    $('#step-2').addClass("hiddenStepInfo");

    scrollToTopMain();
}

//Function to navigate from step 3 to 4
function step3to4() {
    percent = 60;
    $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
    $(".progress-completed").text(percent + "%");

    $('#div3').removeClass("activestep");
    $('#div4').addClass("activestep");

    $('#step-3').removeClass("activeStepInfo");
    $('#step-4').addClass("activeStepInfo");
    $('#step-3').addClass("hiddenStepInfo");

    scrollToTopMain();
}

//Function to navigate from step 4 to 5
function step4to5() {
    percent = 80;
    $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
    $(".progress-completed").text(percent + "%");

    $('#div4').removeClass("activestep");
    $('#div5').addClass("activestep");

    $('#step-4').removeClass("activeStepInfo");
    $('#step-5').addClass("activeStepInfo");
    $('#step-4').addClass("hiddenStepInfo");

    scrollToTopMain();
}

//Function to navigate from step 5 to 6
function step5to6() {
    percent = 100;
    $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
    $(".progress-completed").text(percent + "%");

    $('#div5').removeClass("activestep");
    $('#last').addClass("activestep");

    $('#step-5').removeClass("activeStepInfo");
    $('#step-6').addClass("activeStepInfo");
    $('#step-5').addClass("hiddenStepInfo");

    scrollToTopMain();
}

//a function to animate scroll back to the top of the 'main' div
function scrollToTopMain() {
    $("#main").animate({ scrollTop: 0 }, "slow");
}


function resetActive(event, percent, step) {
    $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
    $(".progress-completed").text(percent + "%");

    $("div").each(function () {
        if ($(this).hasClass("activestep")) {
            $(this).removeClass("activestep");
        }
    });

    if (event.target.className == "col-md-2") {
        $(event.target).addClass("activestep");
    }
    else {
        $(event.target.parentNode).addClass("activestep");
    }

    hideSteps();
    showCurrentStepInfo(step);
}

function hideSteps() {
    $("div").each(function () {
        if ($(this).hasClass("activeStepInfo")) {
            $(this).removeClass("activeStepInfo");
            $(this).addClass("hiddenStepInfo");
        }
    });
}

function showCurrentStepInfo(step) {        
    var id = "#" + step;
    $(id).addClass("activeStepInfo");
}

$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#video").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModalVideo").on('hide.bs.modal', function(){
        $("#video").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModalVideo").on('show.bs.modal', function(){
        $("#video").attr('src', url);
    });
});