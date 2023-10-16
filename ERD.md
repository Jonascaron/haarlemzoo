    Gebruiker
        Attributen: GebruikersID, Naam, E-mail, Wachtwoord, RegistratieDatum
        Relaties:
            Kan één of meer Tickets kopen
            Kan één of meer Merchandise items kopen
            Kan zijn eigen Profiel bekijken en aanpassen

    Profiel
        Attributen: ProfielID, GebruikersID, Adres, Telefoonnummer
        Relaties:
            Is gekoppeld aan één Gebruiker

    Ticket
        Attributen: TicketID, GebruikersID, DatumTijdAankoop, TicketType, Prijs
        Relaties:
            Is gekocht door één Gebruiker

    Merchandise
        Attributen: MerchandiseID, Beschrijving, Prijs, Voorraad
        Relaties:
            Kan worden gekocht door één of meer Gebruikers

    Admin
        Attributen: AdminID, Naam, E-mail, Wachtwoord
        Relaties:
            Kan TicketTypes aanmaken, bekijken, aanpassen en verwijderen
            Kan Merchandise items uploaden en verkochte merchandise bekijken

    TicketType
        Attributen: TicketTypeID, Beschrijving, Prijs
        Relaties:
            Kan worden aangemaakt, bekeken, aangepast en verwijderd door Admin
