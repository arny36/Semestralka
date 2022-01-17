$(document).ready(function() {
    $('.btn-odstran').click(function () {
        id = $(this).attr("id");
        var rozhodovac = confirm("Si si istý že chceš vymazať túto položku ?");
        if (rozhodovac==true) {
            $.post('?c=konto&a=vymazKonto&id=' + id, function () {


                $(".skry" + id).hide();
                alert("Úspešne ste vymazali položku");


            });
        }
    })
});


$(document).ready(function() {
    hlasoval = false;
    $('.btn-vypisludi').click(function () {
        if (!hlasoval){
            $.post('?c=konto&a=vypisPocet', function (count) {
                $(".vypisuj").show();
                document.getElementById("vypis").innerHTML = "Aktuálny počet zaregistrovaných je : " + count;
                hlasoval = true;
            });
        } else  {
            hlasoval=false;
            $(".vypisuj").hide();

        }
    })
});


function post(path, parameters) {
    var form = $('<form></form>');

    form.attr("method", "post");
    form.attr("action", path);

    $.each(parameters, function(key, value) {
        var field = $('<input></input>');

        field.attr("type", "hidden");
        field.attr("name", key);
        field.attr("value", value);

        form.append(field);
    });

    // The form needs to be a part of the document in
    // order for us to be able to submit it.
    $(document.body).append(form);
    form.submit();
}

function validateData({ meno, priezvisko, email , emailTextovy}) {
    let menoValid = meno;
    let priezviskoValid = priezvisko;
    let emailValid = email;
    let emailTextovyValid = email;

    if (menoValid.length < 3){
        alert("meno nieje dostatocne dlhe");
        return true;
    }
    if (priezviskoValid.length < 3){
        alert("priezvisko nieje dostatocne dlhe");
        return true;
    }

    if (emailValid.length < 3){
        alert("Email je priliš krátky");
        return true;
    }


    return false;
}

function ulozto(id) {
    var meno =  document.getElementById("meno"+id).value;
    var priezvisko = document.getElementById("priezvisko"+id).value;
    var email = document.getElementById("email"+id).value;
    var emailTextovy = document.getElementById("textemail"+id).value;
    var userdata = { meno, priezvisko, email,emailTextovy };

    var isValid = validateData(userdata);
    if (isValid) return;

    $.ajax({
        type: "POST",
        url: 'http://localhost/Semestralka?c=konto&a=upravKonto&id=' + id,
        data:userdata,
        success: (data) => {
            console.log(data);
            document.getElementById("btnedit"+id).style.visibility="visible";
            document.getElementById("meno"+id).style.visibility="hidden";
            document.getElementById("textmeno"+id).innerHTML = data.meno;
            document.getElementById("priezvisko"+id).style.visibility="hidden";
            document.getElementById("textpriezvisko"+id).innerHTML = data.priezvisko;
            document.getElementById("email"+id).style.visibility="hidden";
            document.getElementById("textemail"+id).innerHTML = data.email;
            document.getElementById("btnsave"+id).style.visibility="hidden";
            document.getElementById("textmeno"+id).style.visibility="visible";
            document.getElementById("textpriezvisko"+id).style.visibility="visible";
            document.getElementById("textemail"+id).style.visibility="visible";
        }
    });

}



function schovajTlacitko(id) {


    document.getElementById("btnedit"+id).style.visibility="hidden";

    document.getElementById("meno"+id).style.visibility="visible";
    document.getElementById("priezvisko"+id).style.visibility="visible";
    document.getElementById("email"+id).style.visibility="visible";
    document.getElementById("btnsave"+id).style.visibility="visible";
    document.getElementById("textmeno"+id).style.visibility="hidden";
    document.getElementById("textpriezvisko"+id).style.visibility="hidden";
    document.getElementById("textemail"+id).style.visibility="hidden";
}








