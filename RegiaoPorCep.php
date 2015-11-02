<?php

class Regiao {

    /**
     * Método Mágico
     * 
     * @access public
     * @param int $CEP CEP sem mascara
     * @return array
     */

    public function __construct($CEP) {
        return $this->detectaRegiao($CEP);
    }

    /**
     * Verifica os 5 primeiros numeros do CEP e busca informações baseada 
     * em cada estado atribuida ao mesmo.
     * 
     * @param int $CEP CEP sem mascara
     * @return array
     */
    private function detectaRegiao($CEP) {
        $prefix = substr($CEP, 0, 5);
        switch (true) {
            // SP
            case in_array($prefix, range(01000, 05999)) || in_array($prefix, range(08000, 08499)):
                $addressRegion = array(
                    "State" => "São Paulo",
                    "StateCode" => "SP",
                    "Region" => "Capital",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(06000, 09999)):
                $addressRegion = array(
                    "State" => "São Paulo",
                    "StateCode" => "SP",
                    "Region" => "Metropolitana",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(11000, 11999)):
                $addressRegion = array(
                    "State" => "São Paulo",
                    "StateCode" => "SP",
                    "Region" => "Litoral",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(12000, 19999)):
                $addressRegion = array(
                    "State" => "São Paulo",
                    "StateCode" => "SP",
                    "Region" => "Interior",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(01000, 19999)):
                $addressRegion = array(
                    "State" => "São Paulo",
                    "StateCode" => "SP",
                    "Region" => "Espectro",
                    "StateRegion" => "Sudeste"
                );
                break;
            // Rio de Janeiro
            case in_array($prefix, range(20000, 23799)):
                $addressRegion = array(
                    "State" => "Rio de Janeiro ",
                    "StateCode" => "RJ",
                    "Region" => "Capital",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(20000, 26600)):
                $addressRegion = array(
                    "State" => "Rio de Janeiro ",
                    "StateCode" => "RJ",
                    "Region" => "Metropolitana",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(26601, 28999)):
                $addressRegion = array(
                    "State" => "Rio de Janeiro ",
                    "StateCode" => "RJ",
                    "Region" => "Interior",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(20000, 28999)):
                $addressRegion = array(
                    "State" => "Rio de Janeiro ",
                    "StateCode" => "RJ",
                    "Region" => "Espectro",
                    "StateRegion" => "Sudeste"
                );
                break;
            // Espirito Santo
            case in_array($prefix, range(20000, 28999)):
                $addressRegion = array(
                    "State" => "Espirito Santo",
                    "StateCode" => "ES",
                    "Region" => "Vitória",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(29100, 29999)):
                $addressRegion = array(
                    "State" => "Espirito Santo",
                    "StateCode" => "ES",
                    "Region" => "Interior",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(29000, 29999)):
                $addressRegion = array(
                    "State" => "Espirito Santo",
                    "StateCode" => "ES",
                    "Region" => "Espectro",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(30000, 31999)):
                $addressRegion = array(
                    "State" => "Minas Gerais",
                    "StateCode" => "MG",
                    "Region" => "Belo Horizonte",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(30000, 34999)):
                $addressRegion = array(
                    "State" => "Minas Gerais",
                    "StateCode" => "MG",
                    "Region" => "Metropolitana",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(35000, 39999)):
                $addressRegion = array(
                    "State" => "Minas Gerais",
                    "StateCode" => "MG",
                    "Region" => "Interior",
                    "StateRegion" => "Sudeste"
                );
                break;
            case in_array($prefix, range(30000, 39999)):
                $addressRegion = array(
                    "State" => "Minas Gerais",
                    "StateCode" => "MG",
                    "Region" => "Espectro",
                    "StateRegion" => "Sudeste"
                );
                break;
            // Bahia
            case in_array($prefix, range(40000, 41999)):
                $addressRegion = array(
                    "State" => "Bahia",
                    "StateCode" => "BA",
                    "Region" => "Salvador",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(40000, 44470)):
                $addressRegion = array(
                    "State" => "Bahia",
                    "StateCode" => "BA",
                    "Region" => "Metropolitana",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(44471, 48999)):
                $addressRegion = array(
                    "State" => "Bahia",
                    "StateCode" => "BA",
                    "Region" => "Interior",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(40000, 48999)):
                $addressRegion = array(
                    "State" => "Bahia",
                    "StateCode" => "BA",
                    "Region" => "Espectro",
                    "StateRegion" => "Nordeste"
                );
                break;
            // Sergipe
            case in_array($prefix, range(49000, 49099)):
                $addressRegion = array(
                    "State" => "Sergipe",
                    "StateCode" => "SE",
                    "Region" => "Aracaju",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(49100, 49999)):
                $addressRegion = array(
                    "State" => "Sergipe",
                    "StateCode" => "SE",
                    "Region" => "Interior",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(49000, 49999)):
                $addressRegion = array(
                    "State" => "Sergipe",
                    "StateCode" => "SE",
                    "Region" => "Espectro",
                    "StateRegion" => "Nordeste"
                );
                break;
            // Pernambuco
            case in_array($prefix, range(50000, 52999)):
                $addressRegion = array(
                    "State" => "Pernambuco",
                    "StateCode" => "PE",
                    "Region" => "Recife",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(50000, 54999)):
                $addressRegion = array(
                    "State" => "Pernambuco",
                    "StateCode" => "PE",
                    "Region" => "Metropolitana",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(55000, 56999)):
                $addressRegion = array(
                    "State" => "Pernambuco",
                    "StateCode" => "PE",
                    "Region" => "Interior",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(50000, 56999)):
                $addressRegion = array(
                    "State" => "Pernambuco",
                    "StateCode" => "PE",
                    "Region" => "Espectro",
                    "StateRegion" => "Nordeste"
                );
                break;
            // Alagoas
            case in_array($prefix, range(57000, 57099)):
                $addressRegion = array(
                    "State" => "Alagoas",
                    "StateCode" => "AL",
                    "Region" => "Maceió",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(57100, 57999)):
                $addressRegion = array(
                    "State" => "Alagoas",
                    "StateCode" => "AL",
                    "Region" => "Interior",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(57000, 57999)):
                $addressRegion = array(
                    "State" => "Alagoas",
                    "StateCode" => "AL",
                    "Region" => "Espectro",
                    "StateRegion" => "Nordeste"
                );
                break;
            // Paraiba
            case in_array($prefix, range(58000, 58099)):
                $addressRegion = array(
                    "State" => "Paraiba",
                    "StateCode" => "PB",
                    "Region" => "João Pessoa",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(58100, 58999)):
                $addressRegion = array(
                    "State" => "Paraiba",
                    "StateCode" => "PB",
                    "Region" => "Interior",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(58000, 58999)):
                $addressRegion = array(
                    "State" => "Paraiba",
                    "StateCode" => "PB",
                    "Region" => "Espectro",
                    "StateRegion" => "Nordeste"
                );
                break;
            // Rio Grande do Norte
            case in_array($prefix, range(59000, 59099)):
                $addressRegion = array(
                    "State" => "Rio Grande do Norte",
                    "StateCode" => "RN",
                    "Region" => "Natal",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(59100, 59999)):
                $addressRegion = array(
                    "State" => "Rio Grande do Norte",
                    "StateCode" => "RN",
                    "Region" => "Interior",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(59000, 59999)):
                $addressRegion = array(
                    "State" => "Rio Grande do Norte",
                    "StateCode" => "RN",
                    "Region" => "Espectro",
                    "StateRegion" => "Nordeste"
                );
                break;
            // Ceará
            case in_array($prefix, range(60000, 60999)):
                $addressRegion = array(
                    "State" => "Ceará",
                    "StateCode" => "CE",
                    "Region" => "Fortaleza",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(60000, 61900)):
                $addressRegion = array(
                    "State" => "Ceará",
                    "StateCode" => "CE",
                    "Region" => "Metropolitana",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(61901, 63999)):
                $addressRegion = array(
                    "State" => "Ceará",
                    "StateCode" => "CE",
                    "Region" => "Interior",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(60000, 63999)):
                $addressRegion = array(
                    "State" => "Ceará",
                    "StateCode" => "CE",
                    "Region" => "Espectro",
                    "StateRegion" => "Nordeste"
                );
                break;
            // Piauí
            case in_array($prefix, range(64000, 64099)):
                $addressRegion = array(
                    "State" => "Piauí",
                    "StateCode" => "PI",
                    "Region" => "Teresina",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(64100, 64999)):
                $addressRegion = array(
                    "State" => "Piauí",
                    "StateCode" => "PI",
                    "Region" => "Interior",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(64000, 64999)):
                $addressRegion = array(
                    "State" => "Piauí",
                    "StateCode" => "PI",
                    "Region" => "Espectro",
                    "StateRegion" => "Nordeste"
                );
                break;
            // Maranhão
            case in_array($prefix, range(65000, 65099)):
                $addressRegion = array(
                    "State" => "Maranhão",
                    "StateCode" => "MA",
                    "Region" => "São Luiz",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(65100, 65999)):
                $addressRegion = array(
                    "State" => "Maranhão",
                    "StateCode" => "MA",
                    "Region" => "Interior",
                    "StateRegion" => "Nordeste"
                );
                break;
            case in_array($prefix, range(65000, 65999)):
                $addressRegion = array(
                    "State" => "Maranhão",
                    "StateCode" => "MA",
                    "Region" => "Espectro",
                    "StateRegion" => "Nordeste"
                );
                break;
            // Pará
            case in_array($prefix, range(66000, 66999)):
                $addressRegion = array(
                    "State" => "Pará",
                    "StateCode" => "PA",
                    "Region" => "Belém",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(66000, 67999)):
                $addressRegion = array(
                    "State" => "Pará",
                    "StateCode" => "PA",
                    "Region" => "Metropolitana",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(68000, 68899)):
                $addressRegion = array(
                    "State" => "Pará",
                    "StateCode" => "PA",
                    "Region" => "Interior",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(66000, 68899)):
                $addressRegion = array(
                    "State" => "Pará",
                    "StateCode" => "PA",
                    "Region" => "Espectro",
                    "StateRegion" => "Norte"
                );
                break;
            // Amapá
            case in_array($prefix, range(68900, 68914)):
                $addressRegion = array(
                    "State" => "Amapá",
                    "StateCode" => "AP",
                    "Region" => "Macapá",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(68915, 68999)):
                $addressRegion = array(
                    "State" => "Amapá",
                    "StateCode" => "AP",
                    "Region" => "Interior",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(68900, 68999)):
                $addressRegion = array(
                    "State" => "Amapá",
                    "StateCode" => "AP",
                    "Region" => "Espectro",
                    "StateRegion" => "Norte"
                );
                break;
            // Amazonas
            case in_array($prefix, range(69000, 69099)):
                $addressRegion = array(
                    "State" => "Amazonas",
                    "StateCode" => "AM",
                    "Region" => "Manaus",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(69100, 69299)):
                $addressRegion = array(
                    "State" => "Amazonas",
                    "StateCode" => "AM",
                    "Region" => "Interior",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(69400, 69899)):
                $addressRegion = array(
                    "State" => "Amazonas",
                    "StateCode" => "AM",
                    "Region" => "Espectro",
                    "StateRegion" => "Norte"
                );
                break;
            // Roraima
            case in_array($prefix, range(69300, 69339)):
                $addressRegion = array(
                    "State" => "Roraima",
                    "StateCode" => "RR",
                    "Region" => "Boa Vista",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(69340, 69389)):
                $addressRegion = array(
                    "State" => "Roraima",
                    "StateCode" => "RR",
                    "Region" => "Interior",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(69300, 69389)):
                $addressRegion = array(
                    "State" => "Roraima",
                    "StateCode" => "RR",
                    "Region" => "Espectro",
                    "StateRegion" => "Norte"
                );
                break;
            // Acre
            case in_array($prefix, range(69900, 69920)):
                $addressRegion = array(
                    "State" => "Acre",
                    "StateCode" => "AC",
                    "Region" => "Rio cinza",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(69921, 69999)):
                $addressRegion = array(
                    "State" => "Acre",
                    "StateCode" => "AC",
                    "Region" => "Interior",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(69900, 69999)):
                $addressRegion = array(
                    "State" => "Acre",
                    "StateCode" => "AC",
                    "Region" => "Espectro",
                    "StateRegion" => "Norte"
                );
                break;
            // Distrito Federal
            case in_array($prefix, range(70000, 70999)):
                $addressRegion = array(
                    "State" => "Distrito Federal",
                    "StateCode" => "DF",
                    "Region" => "Brasília",
                    "StateRegion" => "Centro-Oeste"
                );
                break;
            case in_array($prefix, range(71000, 73699)):
                $addressRegion = array(
                    "State" => "Distrito Federal",
                    "StateCode" => "DF",
                    "Region" => "Cidades Satélite",
                    "StateRegion" => "Centro-Oeste"
                );
                break;
            case in_array($prefix, range(70000, 73699)):
                $addressRegion = array(
                    "State" => "Distrito Federal",
                    "StateCode" => "DF",
                    "Region" => "Espectro",
                    "StateRegion" => "Centro-Oeste"
                );
                break;
            // Goiás (GO)
            case in_array($prefix, range(72800, 73999)) OR in_array($prefix, range(74000, 74894)):
                $addressRegion = array(
                    "State" => "Goiás",
                    "StateCode" => "GO",
                    "Region" => "Goiânia",
                    "StateRegion" => "Centro-Oeste"
                );
                break;
            case in_array($prefix, range(74895, 76799)):
                $addressRegion = array(
                    "State" => "Goiás",
                    "StateCode" => "GO",
                    "Region" => "Interior",
                    "StateRegion" => "Centro-Oeste"
                );
                break;
            case in_array($prefix, range(72800, 76799)):
                $addressRegion = array(
                    "State" => "Goiás",
                    "StateCode" => "GO",
                    "Region" => "Espectro",
                    "StateRegion" => "Centro-Oeste"
                );
                break;
            // Tocantins
            case in_array($prefix, range(77000, 77270)):
                $addressRegion = array(
                    "State" => "Tocantins",
                    "StateCode" => "TO",
                    "Region" => "Palmas",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(77300, 77995)):
                $addressRegion = array(
                    "State" => "Tocantins",
                    "StateCode" => "TO",
                    "Region" => "Interior",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(77000, 77995)):
                $addressRegion = array(
                    "State" => "Tocantins",
                    "StateCode" => "TO",
                    "Region" => "Espectro",
                    "StateRegion" => "Norte"
                );
                break;
            // Mato Grosso
            case in_array($prefix, range(78000, 78109)):
                $addressRegion = array(
                    "State" => "Mato Grosso",
                    "StateCode" => "MT",
                    "Region" => "Cuiabá",
                    "StateRegion" => "Centro-Oeste"
                );
                break;
            case in_array($prefix, range(78110, 78899)):
                $addressRegion = array(
                    "State" => "Mato Grosso",
                    "StateCode" => "MT",
                    "Region" => "Interior",
                    "StateRegion" => "Centro-Oeste"
                );
                break;
            case in_array($prefix, range(78000, 78899)):
                $addressRegion = array(
                    "State" => "Mato Grosso",
                    "StateCode" => "MT",
                    "Region" => "Espectro",
                    "StateRegion" => "Centro-Oeste"
                );
                break;
            // Rondônia
            case in_array($prefix, range(78900, 78930)):
                $addressRegion = array(
                    "State" => "Rondônia",
                    "StateCode" => "RO",
                    "Region" => "Porto Velho",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(78931, 78999)):
                $addressRegion = array(
                    "State" => "Rondônia",
                    "StateCode" => "RO",
                    "Region" => "Interior",
                    "StateRegion" => "Norte"
                );
                break;
            case in_array($prefix, range(78900, 78999)):
                $addressRegion = array(
                    "State" => "Rondônia",
                    "StateCode" => "RO",
                    "Region" => "Espectro",
                    "StateRegion" => "Norte"
                );
                break;
            // Mato Grosso do Sul 
            case in_array($prefix, range(79000, 79129)):
                $addressRegion = array(
                    "State" => "Mato Grosso do Sul",
                    "StateCode" => "MS",
                    "Region" => "Campo Grande",
                    "StateRegion" => "Centro-Oeste"
                );
                break;
            case in_array($prefix, range(79130, 79999)):
                $addressRegion = array(
                    "State" => "Mato Grosso do Sul",
                    "StateCode" => "MS",
                    "Region" => "Interior",
                    "StateRegion" => "Centro-Oeste"
                );
                break;
            case in_array($prefix, range(79000, 79999)):
                $addressRegion = array(
                    "State" => "Mato Grosso do Sul",
                    "StateCode" => "MS",
                    "Region" => "Espectro",
                    "StateRegion" => "Centro-Oeste"
                );
                break;
            // Paraná 
            case in_array($prefix, range(80000, 82999)):
                $addressRegion = array(
                    "State" => "Paraná",
                    "StateCode" => "PR",
                    "Region" => "Curitiba",
                    "StateRegion" => "Sul"
                );
                break;
            case in_array($prefix, range(80000, 83800)):
                $addressRegion = array(
                    "State" => "Paraná",
                    "StateCode" => "PR",
                    "Region" => "Metropolitana",
                    "StateRegion" => "Sul"
                );
                break;
            case in_array($prefix, range(83801, 87999)):
                $addressRegion = array(
                    "State" => "Paraná",
                    "StateCode" => "PR",
                    "Region" => "Interior",
                    "StateRegion" => "Sul"
                );
                break;
            case in_array($prefix, range(80000, 87999)):
                $addressRegion = array(
                    "State" => "Paraná",
                    "StateCode" => "PR",
                    "Region" => "Espectro",
                    "StateRegion" => "Sul"
                );
                break;
            // Santa Catarina
            case in_array($prefix, range(88000, 82999)):
                $addressRegion = array(
                    "State" => "Santa Catarina",
                    "StateCode" => "SC",
                    "Region" => "Florianópolis",
                    "StateRegion" => "Sul"
                );
                break;
            case in_array($prefix, range(88000, 88469)):
                $addressRegion = array(
                    "State" => "Santa Catarina",
                    "StateCode" => "SC",
                    "Region" => "Metropolitana",
                    "StateRegion" => "Sul"
                );
                break;
            case in_array($prefix, range(88470, 89999)):
                $addressRegion = array(
                    "State" => "Santa Catarina",
                    "StateCode" => "SC",
                    "Region" => "Interior",
                    "StateRegion" => "Sul"
                );
                break;
            case in_array($prefix, range(88000, 89999)):
                $addressRegion = array(
                    "State" => "Santa Catarina",
                    "StateCode" => "SC",
                    "Region" => "Espectro",
                    "StateRegion" => "Sul"
                );
                break;
            // Rio Grande do Sul 
            case in_array($prefix, range(90000, 91999)):
                $addressRegion = array(
                    "State" => "Rio Grande do Sul",
                    "StateCode" => "RS",
                    "Region" => "Porto Alegre",
                    "StateRegion" => "Sul"
                );
                break;
            case in_array($prefix, range(90000, 94900)):
                $addressRegion = array(
                    "State" => "Rio Grande do Sul",
                    "StateCode" => "RS",
                    "Region" => "Metropolitana",
                    "StateRegion" => "Sul"
                );
                break;
            case in_array($prefix, range(94901, 99999)):
                $addressRegion = array(
                    "State" => "Rio Grande do Sul",
                    "StateCode" => "RS",
                    "Region" => "Interior",
                    "StateRegion" => "Sul"
                );
                break;
            case in_array($prefix, range(90000, 99999)):
                $addressRegion = array(
                    "State" => "Rio Grande do Sul",
                    "StateCode" => "RS",
                    "Region" => "Espectro",
                    "StateRegion" => "Sul"
                );
                break;
        }
        return $addressRegion;
    }
}
