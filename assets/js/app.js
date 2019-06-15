import 'normalize.css';
import $ from 'jquery';
require('../css/app.css');

$(document).ready(function() {
    
    // Ao clicar no card, obter mais detalhes na API e montar HTML
    $('.card').on('click', function() {
        var card = $(this);
        var tripId = card.attr('data-id');

        card.addClass('open');
        card.find('.seats').show();

        createSeats(tripId);
    });
    
    // Função para obter os bancos disponíveis de uma certa viagem
    function createSeats(travelId) {
        var baseAPI = "https://clickbus-teste.herokuapp.com/trip/";
        var busURL = baseAPI + travelId;

        $.get(busURL, function(res){
            let seats = JSON.parse(res);
            createSeatsView(travelId, seats.map);
        });
    }

    // Criar os assentos na view de acordo com as informações da API
    function createSeatsView(id, seats) {

        for (let i = 0; i < seats.length; i++) {
            let seat = $("<li class='seat'></li>");
            let label = seats[i].label;
            let available = seats[i].available;
            let x = seats[i].position.x;
            let y = seats[i].position.y;

            if (available == true) {
                seat.append("<span>"+label+"</span>");
                seat.addClass("available");
            } else {
                seat.addClass("busy");
            }
            seat.attr("x", x);
            seat.attr("y", y);

            $('.card[data-id='+id+'] .seats .bus-seats').append(seat);
        }
        
    }
});