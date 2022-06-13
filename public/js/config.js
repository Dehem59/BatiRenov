export let jsonPath = {
    "etat":{
        "name": "Etape 1",
        "question": "Quel secteur concerne votre besoin ?",
        "reponses": {
            "A": {
                "etat": {
                    "name": "Etape 2",
                    "question": "De quoi s'agit-il ?",
                    "reponses": {
                        "C": {
                            "etat": {
                                "resultat": "A partir de 25€ le m²",
                                "isFinal": true
                            }
                        },
                        "D": {
                            "etat": {
                                "resultat": "A partir de 30€ le m²",
                                "isFinal": true
                            }
                        }
                    },
                    "isFinal": false
                }
            },
            "B": {
                "etat": {
                    "name": "Etape 2",
                    "question": "Que souhaitez vous faire en plomberie ?",
                    "reponses": {
                        "E": {
                            "etat": {
                                "resultat": "Débouchage hydrocurage à partir de 255€",
                                "isFinal": true
                            }
                        },
                        "F": {
                            "etat": {
                                "name": "Etape 3",
                                "question": "Quelle partie est à rénover ?",
                                "reponses": {
                                    "G": {
                                        "etat": {
                                            "resultat": "A partir de 600€ sur devis",
                                            "isFinal": true
                                        }
                                    },
                                    "H": {
                                        "etat": {
                                            "resultat": "Uniquement sur devis",
                                            "isFinal": true
                                        }
                                    }
                                },
                                "isFinal": false
                            }
                        }
                    },
                    "isFinal": false
                }
            }
        },
        "isFinal": false
    }
}

export let txtMapping = {
    "A": "Carrelage",
    "B": "Plomberie",
    "C": "Pose de petit carreau",
    "D": "Pose de grand carreau",
    "E": "Débouchage Canalisation",
    "F": "Rénovation Plomberie",
    "G": "Rénovation Salle de bain",
    "H": "Rénovation Complète"
};