
# Introduction — ANGARA Finance & ANGARA Invest

## Qu'est-ce qu'ANGARA ?

ANGARA est une plateforme institutionnelle de financement de projets, composée de **deux environnements complémentaires** :

| Plateforme | Qui l'utilise ? | Rôle |
|------------|-----------------|------|
| **ANGARA Finance** | Staff de la banque / institution (12 profils) | Accompagner les porteurs, instruire les dossiers, valider les financements, préparer les opportunités |
| **ANGARA Invest** | Investisseurs (institutions, fonds, banques, bailleurs) | Consulter les opportunités validées, manifester un intérêt, accéder à la data room |

---

## Principe fondamental

> **ANGARA Invest ne publie jamais un dossier brut.**  
> Seule une **opportunité préparée et contrôlée** — un résumé sanitizé du dossier d'instruction — est visible côté investisseur.

Les données sensibles (notes internes, conclusions d'analystes, chemins de fichiers, identifiants internes) restent exclusivement dans ANGARA Finance.

---

## Comment les deux plateformes s'articulent

```text
Porteur
  └── Projet / Entreprise
        └── Dossier d'instruction (workflow interne Finance)
              └── Décision comité → Autorisation Invest
                    └── Opportunité ANGARA Invest (snapshot public)
                          └── Data room (3 niveaux d'accès)
                                └── Intérêt investisseur → Financement → Suivi
```

1. Le **gestionnaire** crée et accompagne le porteur et son projet.
2. Le **Chef d'agence** valide le projet (prospect → client).
3. Un **dossier d'instruction** traverse les phases KYC, analyses et comité.
4. Après validation comité, le **chargé transfert Invest** prépare et publie l'opportunité.
5. Les **investisseurs** consultent le portail, manifestent leur intérêt et accèdent aux documents autorisés.
6. Le **suivi post-financement** clôt le cycle côté Finance.

---

## Accès aux plateformes

| Plateforme | URL type (développement) | Authentification |
|------------|--------------------------|------------------|
| ANGARA Finance | Application web staff (Laravel / Blade) | Compte staff institution |
| ANGARA Invest | Portail Vue (`angara-invest-vue`) | Inscription ou compte investisseur |

Contactez votre administrateur ANGARA pour obtenir vos identifiants.

---

## Concepts clés à retenir dès le départ

| Terme | Signification courte |
|-------|---------------------|
| **Porteur** | La personne ou structure qui porte l'initiative (≠ le projet) |
| **Projet / Entreprise** | L'unité économique accompagnée |
| **Prospect** | État d'un projet **non encore validé** par l'agence |
| **Dossier d'instruction** | Demande de financement en cours d'analyse |
| **Opportunité Invest** | Fiche publique préparée à partir d'un dossier autorisé |
| **Data room** | Espace documentaire d'une opportunité (public / inscrit / restreint) |

Voir le [glossaire complet](./01_GLOSSAIRE.md) pour le détail.

---

## Périmètre V1 opérationnel

### Inclus dans cette version

- Gestion porteurs, projets et prospects
- Workflow dossier d'instruction complet (KYC → analyses → comité → Invest)
- Programmes, organismes et instruments financiers
- Documents et checklist par instrument
- Data room à 3 niveaux
- Publication ANGARA Invest et matching investisseurs (V1)
- Suivi post-financement et clôture
- 12 profils staff documentés

### Hors périmètre V1

| Élément | Statut |
|---------|--------|
| Maturation obligatoire | Existe en base mais **non requis** dans les parcours V1 |
| Modules legacy (coopérative, sectoriel…) | Hors cible — ne pas utiliser |
| Publication Invest en production | Soumise à revue sanitizer et checklist |

---

## Suite de la lecture

- **Staff Finance** → [Guide ANGARA Finance](./02_ANGARA_FINANCE.md)
- **Investisseur** → [Guide ANGARA Invest](./03_ANGARA_INVEST.md)
- **Vue d'ensemble du flux** → [Parcours transversal](./04_PARCOURS_TRANSVERSAL.md)


---


# Glossaire simplifié

Termes officiels à utiliser dans les échanges et dans l'interface ANGARA.

---

## A

**Agence** — Antenne locale de l'institution. Le Chef d'agence y exerce son périmètre de validation.

**Autorisation Invest** — Décision du comité autorisant la préparation d'une opportunité sur ANGARA Invest.

---

## C

**Chef d'agence** — Responsable d'antenne qui valide les projets (prospects) et les dossiers soumis par les gestionnaires.

**Client** — Projet validé par l'agence (statut « projet validé agence »). Ce n'est pas le porteur lui-même.

**Comité de validation** — Instance qui statue sur les dossiers d'instruction après les analyses.

---

## D

**Data room** — Espace documentaire rattaché à une opportunité Invest. Trois niveaux en V1 :

| Niveau | Qui y accède ? |
|--------|----------------|
| **Public** | Tout visiteur |
| **Inscrit** (registered) | Investisseur connecté |
| **Restreint** (restricted) | Sur demande validée par le staff ; NDA requis si configuré |

**Dossier d'instruction** — Demande de financement instruite en interne. Ne pas confondre avec une « maturation » (hors parcours V1).

---

## I

**Instrument financier** — Type de produit de financement (dette, equity, garantie…) rattaché au dossier.

**Intérêt investisseur** — Manifestation d'intérêt d'un investisseur sur une opportunité (montant proposé, statut de suivi).

---

## N

**NDA** — Accord de confidentialité. Condition d'accès au niveau **restreint** de la data room (pas un niveau séparé).

---

## O

**Opportunité Invest** — Fiche publiable pour les investisseurs, préparée à partir d'un dossier autorisé. Ce n'est **pas** le dossier interne.

**Organisation intermédiaire** — Structure d'accompagnement du porteur (incubateur, coopérative…).

**Organisme** — Institution qui porte, finance ou supervise un **programme** (bailleur).

---

## P

**Porteur** — Promoteur de l'initiative. Distinct du projet qu'il porte.

**Programme** — Dispositif de financement rattaché à un organisme ; choix optionnel lors de la création du dossier.

**Prospect** — **État** d'un projet non encore validé par l'agence. Ce n'est ni une personne ni une entité séparée.

**Projet / Entreprise** — Unité économique accompagnée (activité, équipe, documents).

---

## S

**Snapshot Invest** — Export contrôlé et nettoyé des données d'un dossier autorisé, utilisé pour créer l'opportunité.

**Suivi post-financement** — Phase après obtention du financement : décaissements, remboursements, incidents, clôture.

---

## Confusions fréquentes à éviter

| ❌ Incorrect | ✅ Correct |
|-------------|-----------|
| « Le prospect Jean Dupont » | « Le projet de Jean Dupont est en attente de validation agence » |
| « Publier le dossier sur Invest » | « Publier une opportunité préparée » |
| Organisme = incubateur | Organisation intermédiaire = incubateur ; Organisme = bailleur |
| NDA = 4e niveau data room | NDA = condition sur le niveau restreint |

---

## Équivalences (legacy → vocabulaire actuel)

| Ancien terme | Terme actuel |
|--------------|--------------|
| Entreprise | Projet / Entreprise |
| Dossier | Dossier d'instruction |
| Client | Projet validé agence |


---


# Guide ANGARA Finance — Prise en main staff

**Public :** Gestionnaires, Chefs d'agence, analystes, comité, chargé transfert Invest, suivi post-financement, auditeurs, administrateurs.

---

## 1. Connexion et navigation

### Se connecter

1. Ouvrez l'application ANGARA Finance avec les identifiants fournis par votre administrateur.
2. Le menu latéral affiche uniquement les modules auxquels votre profil a accès.
3. Votre agence et vos rôles actifs apparaissent dans l'en-tête.

### Navigation

- Le **menu** est filtré selon vos permissions : vous ne voyez que ce que vous pouvez utiliser.
- Chaque écran comporte des états **chargement**, **vide** et **erreur** — attendez le chargement complet avant d'agir.
- Les libellés officiels sont utilisés partout : **Porteur**, **Projet / Entreprise**, **Dossier d'instruction**.

---

## 2. Les 12 profils et leurs missions

| Profil | Mission principale |
|--------|-------------------|
| **Super administrateur** | Administration technique et fonctionnelle globale |
| **Admin Finance** | Paramétrage métier, référentiels, workflows |
| **Chef d'agence** | Valider prospects et dossiers au niveau agence |
| **Gestionnaire de portefeuille** | Créer porteurs, projets, dossiers ; accompagner le porteur |
| **Chargé conformité / KYC** | Revue documentaire et conformité |
| **Analyste financier** | Analyse financière du dossier |
| **Analyste risques** | Analyse des risques |
| **Analyste juridique** | Analyse juridique et garanties |
| **Comité de validation** | Décision finale, autorisation Invest |
| **Chargé transfert Invest** | Préparer et publier les opportunités |
| **Suivi post-financement** | Décaissements, incidents, clôture |
| **Auditeur interne** | Consultation des journaux d'audit (lecture seule) |

> Votre administrateur peut aussi créer des **rôles dynamiques** combinant des permissions spécifiques. L'important est ce que vous **pouvez faire**, pas le libellé exact du rôle.

---

## 3. Parcours gestionnaire de portefeuille

### Étape 1 — Créer un porteur

Le **porteur** est la personne ou structure promotrice. Il est distinct du projet.

1. Menu **Porteurs** → **Nouveau porteur**
2. Renseignez l'identité, les contacts et la structure d'accompagnement éventuelle
3. Enregistrez

### Étape 2 — Créer un projet (prospect)

1. Menu **Projets** → **Nouveau projet**
2. Associez le porteur
3. Complétez l'identité économique, l'équipe, les sites
4. Le projet démarre au statut **prospect** (en attente de validation agence)

### Étape 3 — Déposer les pièces exigibles

1. Ouvrez la fiche projet
2. Section **Documents / Pièces exigibles**
3. Téléversez les documents requis (PDF)
4. Vérifiez que la checklist minimale est complète avant soumission

### Étape 4 — Soumettre à l'agence

1. Vérifiez la complétude du formulaire et des pièces
2. Action **Soumettre à l'agence**
3. Le projet passe en **soumis agence** — visible par le Chef d'agence

**Résultats possibles :**

| Décision CA | Effet |
|-------------|-------|
| Validé | Projet **validé agence** — vous pouvez créer un dossier d'instruction |
| Rejeté | Projet rejeté (terminal) |
| Retourné | Compléments demandés — corrigez et resoumettez |

### Étape 5 — Créer un dossier d'instruction

1. Depuis un projet validé : **Nouveau dossier d'instruction**
2. Renseignez le montant, l'**instrument financier** (obligatoire), le programme (optionnel)
3. Le dossier démarre en **brouillon**
4. Complétez la checklist documentaire liée à l'instrument
5. **Soumettez le dossier à l'agence** pour lancer l'instruction

---

## 4. Parcours Chef d'agence

### Valider un prospect (projet)

1. Menu **Validation prospects** (file d'attente)
2. Ouvrez le projet soumis
3. Vérifiez les pièces et la cohérence
4. Décidez : **Valider**, **Rejeter** ou **Retourner au gestionnaire**

### Valider un dossier d'instruction

1. Menu **Validation dossiers**
2. Examinez le dossier soumis
3. **Valider** → le dossier est transmis à la conformité (KYC)
4. **Rejeter** → retour au gestionnaire avec motif

### Consulter le portefeuille agence

Les menus **Prospects**, **Clients**, **Dossiers** et **Porteurs** permettent de consulter l'ensemble du périmètre agence, au-delà des seules files de validation.

---

## 5. Workflow dossier d'instruction (vue simplifiée)

```text
Brouillon
  → Soumis agence → Transmis conformité (KYC)
      → Conforme ──────────────────────────────────────┐
      │   (ou Non conforme = fin)                    │
      ▼                                                │
Analyse financière → Analyse risques → Analyse juridique
      │                                                │
      ▼                                                │
Comité → Validé comité (autorisation Invest possible)  │
      │                                                │
      ▼                                                │
Préparation Invest → Transfert → Publié Invest ◄────────┘
      │
      ▼
Financement obtenu → Suivi post-financement → Clôture
```

### Phases et acteurs

| Phase | Qui intervient ? | Votre action type |
|-------|------------------|-------------------|
| **Conformité / KYC** | Chargé conformité | Revue documents, demande compléments, valider ou rejeter |
| **Analyse financière** | Analyste financier | Analyse, rapport, clôture de phase |
| **Analyse risques** | Analyste risques | Évaluation risques, rapport |
| **Analyse juridique** | Analyste juridique | Revue juridique, garanties |
| **Comité** | Membres comité | Décision, autorisation Invest |
| **Préparation Invest** | Chargé transfert | 7 étapes de préparation, publication |
| **Post-financement** | Chargé suivi | Décaissements, incidents, clôture |

### Compléments demandés

À tout moment d'une phase d'analyse, un analyste peut **demander des compléments** au gestionnaire :

1. Vous recevez une notification
2. Complétez les documents ou informations demandés
3. Resoumettez — l'analyse reprend

### Rapports obligatoires

Chaque clôture d'étape (validation KYC, fin d'analyse, décision comité…) exige un **rapport rédigé** dans l'interface. Prévoyez le temps de rédaction dans vos processus.

---

## 6. Module conformité / KYC

**Accès :** menu Conformité / KYC

1. Consultez la **file des dossiers transmis**
2. Pour chaque dossier :
   - Vérifiez les documents de la checklist (filtrée selon l'instrument)
   - Validez, rejetez ou demandez le remplacement d'un document
   - Demandez des compléments si nécessaire
3. Clôturez la phase : **Conforme** ou **Non conforme**

> Un document rejeté peut être remplacé par le gestionnaire sans bloquer l'analyse en cours.

---

## 7. Modules d'analyse (financier, risques, juridique)

Structure identique pour les trois modules :

1. **File d'attente** — dossiers assignés ou en attente
2. **Prise en charge** — ouvrir le dossier, consulter les documents et analyses précédentes
3. **Travail d'analyse** — saisie des éléments, import DSF (financier), grille d'indicateurs
4. **Compléments** — demander des pièces au gestionnaire si besoin
5. **Clôture** — rapport obligatoire, passage à la phase suivante

---

## 8. Comité de validation

1. Menu **Comité** → dossiers **prêts comité**
2. Consultez la synthèse : analyses KYC, financière, risques, juridique
3. Statuez :
   - **Validé** — le dossier peut être autorisé pour Invest
   - **Rejeté** — fin du parcours instruction
   - **Ajourné** — report de décision
4. Si favorable : action **Autoriser pour ANGARA Invest** (optionnelle selon processus)

---

## 9. Préparation et publication ANGARA Invest

**Profil :** Chargé transfert Invest  
**Prérequis :** Dossier au statut **autorisé Invest** (décision comité)

### Assistant de préparation (7 étapes)

1. **Vérification des critères** — checklist de publication
2. **Simulation du snapshot** — aperçu des données qui seront visibles Invest
3. **Documents investissement** — pièces partageables en data room
4. **Paramétrage data room** — niveaux public / inscrit / restreint
5. **Matching investisseurs** — suggestions selon profils
6. **Revue finale** — contrôle sanitizer (aucune donnée sensible)
7. **Publication** — transfert vers ANGARA Invest

### Ce qui est publié vs ce qui reste interne

| Visible Invest | Reste interne Finance |
|--------------|---------------------|
| Titre, résumé, montants publics | Notes comité, conclusions analystes |
| Secteur, instrument, programme | Identifiants dossier internes |
| Documents marqués partageables | Chemins fichiers, analyses brutes |

### Gestion des investisseurs (backoffice)

- **Répertoire investisseurs** — fiche 360°, historique
- **Demandes d'accès restreint** — validation manuelle des accès data room restricted
- **Intentions / intérêts** — suivi des manifestations d'intérêt

---

## 10. Suivi post-financement

**Profil :** Chargé suivi post-financement

Après **financement obtenu** :

1. Enregistrez les **décaissements** selon le calendrier
2. Suivez les **remboursements**
3. Déclarez les **incidents** et plans d'action
4. Produisez les **rapports de suivi**
5. **Clôturez** le dossier lorsque tous les financements sont soldés

---

## 11. Auditeur interne

Accès **lecture seule** aux journaux :

- Transitions de statut
- Décisions et rapports
- Accès documents sensibles
- Exports pour contrôle interne

Menu **Audit** — aucune action de modification.

---

## 12. Administration

### Super administrateur / Admin Finance

- Gestion des **utilisateurs** et **rôles**
- Référentiels : **programmes**, **organismes**, **instruments financiers**, **types documentaires**
- Paramétrage des **permissions** et **portées** (agence, zone, global)
- Configuration ESG (module parallèle, hors workflow principal V1)

---

## 13. Notifications

- Les changements de statut génèrent des **alertes** (email et/ou centre de notifications)
- Consultez **Notifications** dans le menu gestionnaire
- Types courants : complément demandé, décision agence, assignation d'étape, validation comité

---

## 14. Bonnes pratiques staff

1. **Distinction Porteur / Projet / Dossier** — ne jamais confondre les trois niveaux
2. **Checklist avant soumission** — vérifiez instrument et pièces avant de soumettre à l'agence
3. **Rapports complets** — chaque clôture d'étape nécessite un rapport rédigé
4. **Pas de données sensibles vers Invest** — la publication passe par le sanitizer ; ne contournez pas le processus
5. **Maturation** — n'est pas requise en V1 ; ignorez ce parcours sauf instruction contraire

---

## 15. Aide et support

- Questions métier : référez-vous au [glossaire](./01_GLOSSAIRE.md) et à la [FAQ](./05_FAQ_ET_LIMITES_V1.md)
- Problème d'accès : contactez votre administrateur ANGARA Finance
- Vue du flux complet : [Parcours transversal Finance → Invest](./04_PARCOURS_TRANSVERSAL.md)


---


# Guide ANGARA Invest — Prise en main investisseur

**Public :** Investisseurs institutionnels, fonds, banques de développement, bailleurs et visiteurs du portail.

---

## 1. Qu'est-ce qu'ANGARA Invest ?

ANGARA Invest est le **portail investisseur** de la plateforme ANGARA. Il permet de :

- Découvrir des **opportunités de financement** validées par l'institution
- Manifester un **intérêt** sur une opportunité
- Accéder à une **data room** documentaire (selon votre niveau d'accès)
- Gérer votre **profil investisseur** et vos **critères d'investissement**
- Poser des **questions** sur une opportunité (selon disponibilité)

> Seules des opportunités **préparées et contrôlées** sont publiées. Vous ne verrez jamais de dossiers internes, de notes d'analystes ou d'identifiants techniques.

---

## 2. Accès au portail

### Visiteur (non connecté)

- Consultez la **page d'accueil** et la **liste des opportunités publiques**
- Accédez aux informations de niveau **public** de la data room
- **Inscrivez-vous** ou **connectez-vous** pour aller plus loin

### Investisseur inscrit

1. **Inscription** — formulaire avec vos coordonnées et type d'investisseur
2. **Connexion** — email et mot de passe
3. **Profil** — complétez votre fiche et vos critères pour recevoir des recommandations

### Mot de passe oublié

Utilisez le lien **Mot de passe oublié** sur la page de connexion.

---

## 3. Navigation du portail

| Zone | Pages | Accès |
|------|-------|-------|
| **Public** | Accueil, Opportunités, Détail opportunité | Tous |
| **Authentification** | Connexion, Inscription | Tous |
| **Espace investisseur** | Tableau de bord, Profil, Critères, Mes intérêts, Questions | Connecté |

L'interface est **institutionnelle et sobre** : une action principale par écran, badges d'accès visibles, messages d'erreur explicites.

---

## 4. Consulter les opportunités

### Liste des opportunités

1. Menu **Opportunités**
2. Parcourez les fiches publiées (titre, secteur, montant, statut)
3. Utilisez les **filtres** (repliables sur mobile) pour affiner

### Fiche détail

Chaque opportunité affiche :

- **Titre et résumé** publics
- **Montant** et **instrument** de financement
- **Secteur** et **localisation** (si publiés)
- **Programme** ou **organisme** associé (si applicable)
- **Statut** de l'opportunité (ouverte, clôturée…)

> Les identifiants internes, chemins de fichiers et analyses internes ne sont **jamais** affichés.

---

## 5. Data room — niveaux d'accès

Chaque opportunité dispose d'une **data room** avec trois niveaux :

| Niveau | Condition d'accès | Contenu type |
|--------|-------------------|--------------|
| **Public** | Aucune | Synthèse, documents de présentation |
| **Inscrit** | Compte investisseur connecté | Documents réservés aux membres |
| **Restreint** | Demande validée + NDA si requis | Documents sensibles (business plan détaillé, etc.) |

### Accéder à la data room

1. Ouvrez la fiche opportunité
2. Section **Data room** ou onglet **Documents**
3. Les documents disponibles selon votre niveau s'affichent
4. Cliquez **Télécharger** pour obtenir un document autorisé

### Demander un accès restreint

Si des documents sont en niveau **restreint** :

1. Bouton **Demander l'accès**
2. Votre demande est transmise au staff ANGARA Finance
3. Vous recevez une notification lorsque l'accès est **accordé** ou **refusé**
4. Si un **NDA** est requis, signez-le selon les instructions reçues

> L'accès restreint est **validé manuellement** en V1 — comptez un délai de traitement.

---

## 6. Manifester un intérêt

1. Sur la fiche opportunité, bouton **Manifester un intérêt**
2. Indiquez le **montant proposé** (si applicable) et vos commentaires
3. Confirmez

**Suivi :**

- Menu **Mes intérêts** — liste de vos manifestations
- Statuts possibles : en cours, accepté, refusé, retiré
- Vous pouvez **retirer** un intérêt tant qu'il n'est pas finalisé

---

## 7. Recommandations personnalisées

Si votre profil et vos **critères d'investissement** sont renseignés :

1. Menu **Tableau de bord**
2. Section **Recommandations** — opportunités correspondant à votre profil (secteurs, montants, types d'instruments…)

Le matching est basé sur un **score V1** ; il s'améliorera avec l'enrichissement des profils.

---

## 8. Gérer votre profil

### Fiche profil

Menu **Profil** :

- Identité de votre structure
- Type d'investisseur (institution, fonds, banque…)
- Coordonnées et contacts

### Critères d'investissement

Menu **Critères** :

- Secteurs ciblés
- Fourchettes de montants
- Types d'instruments recherchés
- Préférences géographiques

Plus vos critères sont précis, plus les recommandations seront pertinentes.

---

## 9. Questions sur une opportunité

Selon la configuration de l'opportunité :

1. Section **Questions** sur la fiche détail
2. Posez votre question
3. Consultez les réponses dans **Mes questions**

Les réponses proviennent du staff ANGARA — pas d'échange direct avec le porteur en V1.

---

## 10. Tableau de bord investisseur

Vue synthétique :

- **Opportunités recommandées**
- **Intérêts en cours**
- **Accès data room** en attente ou accordés
- **Questions** récentes

---

## 11. Sécurité et confidentialité

ANGARA Invest applique des règles strictes :

| Règle | Détail |
|-------|--------|
| Pas de dossier brut | Seul un snapshot contrôlé est publié |
| Pas d'ID interne | Les URLs utilisent des tokens, pas d'identifiants base de données |
| Sanitisation | Les champs interdits sont filtrés même en cas d'erreur API |
| Accès documentaire | Chaque document est contrôlé par niveau et par investisseur |
| Session | Déconnexion automatique en cas d'expiration du token |

**Ne partagez pas** vos identifiants. Signalez tout document ou information qui vous semble inappropriée à votre contact ANGARA.

---

## 12. Parcours type investisseur

```text
1. Découverte (public)
      ↓
2. Inscription / Connexion
      ↓
3. Compléter profil et critères
      ↓
4. Consulter opportunités + recommandations
      ↓
5. Data room (niveau inscrit)
      ↓
6. Demande accès restreint (si besoin) + NDA
      ↓
7. Manifester un intérêt
      ↓
8. Suivi avec l'équipe ANGARA Finance
```

---

## 13. Limites V1 à connaître

- Accès **restreint** : validation manuelle par le staff
- **Matching** : scoring V1, profils investisseur encore simplifiés
- **Q&R** : pas de chat temps réel avec le porteur
- Certaines opportunités peuvent être en **lecture seule** avant publication complète

Voir la [FAQ complète](./05_FAQ_ET_LIMITES_V1.md).

---

## 14. Aide et support

- Vocabulaire : [Glossaire](./01_GLOSSAIRE.md)
- Flux complet avec Finance : [Parcours transversal](./04_PARCOURS_TRANSVERSAL.md)
- Problème technique : vérifiez votre connexion et reconnectez-vous ; contactez le support ANGARA Invest


---


# Parcours transversal — De la création du projet à l'investissement

Ce chapitre décrit le **flux complet** tel qu'il est vécu successivement par le staff Finance et les investisseurs. Idéal pour la formation croisée des deux publics.

---

## Vue d'ensemble

```text
┌─────────────────────────────────────────────────────────────────┐
│                    ANGARA FINANCE (interne)                      │
├─────────────────────────────────────────────────────────────────┤
│  Porteur → Projet (prospect) → Validation agence → Client       │
│       → Dossier d'instruction                                    │
│            → KYC → Analyses (fin. / risques / jur.) → Comité    │
│                 → Autorisation Invest → Préparation (7 étapes)  │
│                      → Publication snapshot contrôlé             │
└────────────────────────────┬────────────────────────────────────┘
                             │ Transfert sécurisé (outbox)
                             ▼
┌─────────────────────────────────────────────────────────────────┐
│                    ANGARA INVEST (portail)                       │
├─────────────────────────────────────────────────────────────────┤
│  Opportunité publiée → Consultation → Data room                 │
│       → Intérêt investisseur → Accord → Financement              │
└────────────────────────────┬────────────────────────────────────┘
                             │
                             ▼
┌─────────────────────────────────────────────────────────────────┐
│              ANGARA FINANCE — Suivi post-financement           │
├─────────────────────────────────────────────────────────────────┤
│  Décaissements → Remboursements → Incidents → Clôture           │
└─────────────────────────────────────────────────────────────────┘
```

---

## Phase 1 — Qualification du porteur et du projet

| Étape | Acteur Finance | Artefact | Visible Invest ? |
|-------|----------------|----------|------------------|
| 1.1 Création porteur | Gestionnaire | Fiche porteur | Non |
| 1.2 Création projet | Gestionnaire | Fiche projet (prospect) | Non |
| 1.3 Dépôt pièces | Gestionnaire | Documents exigibles | Non |
| 1.4 Soumission agence | Gestionnaire | Projet soumis | Non |
| 1.5 Validation agence | Chef d'agence | Projet validé agence | Non |

**Durée indicative :** variable selon complétude du dossier prospect.

**Point de contrôle :** le projet doit être **validé agence** avant toute création de dossier d'instruction.

---

## Phase 2 — Instruction du dossier

| Étape | Acteur Finance | Transition clé | Visible Invest ? |
|-------|----------------|----------------|------------------|
| 2.1 Création dossier | Gestionnaire | Brouillon | Non |
| 2.2 Soumission dossier | Gestionnaire | Soumis agence | Non |
| 2.3 Validation dossier CA | Chef d'agence | Transmis conformité | Non |
| 2.4 Revue KYC | Chargé conformité | Conforme | Non |
| 2.5 Analyse financière | Analyste financier | Analyse terminée | Non |
| 2.6 Analyse risques | Analyste risques | Analyse terminée | Non |
| 2.7 Analyse juridique | Analyste juridique | Analyse terminée | Non |
| 2.8 Comité | Membres comité | Validé comité | Non |

**Compléments :** à chaque phase, le gestionnaire peut être sollicité pour des pièces additionnelles.

**Point de contrôle comité :** décision **Autoriser pour ANGARA Invest** si le projet doit être proposé aux investisseurs.

---

## Phase 3 — Préparation et publication Invest

| Étape | Acteur Finance | Action | Visible Invest ? |
|-------|----------------|--------|------------------|
| 3.1 Préparation | Chargé transfert | Assistant 7 étapes | Non |
| 3.2 Checklist publication | Chargé transfert | Vérification sanitizer | Non |
| 3.3 Documents data room | Chargé transfert | Marquage partageable + niveaux | Partiel (après publication) |
| 3.4 Matching | Chargé transfert | Suggestions investisseurs | Non |
| 3.5 Publication | Chargé transfert | Transfert outbox → API Invest | **Oui — opportunité live** |

**Frontière critique :** avant l'étape 3.5, **aucune donnée** n'est visible sur le portail Invest. Après publication, seul le **snapshot sanitizé** est exposé.

---

## Phase 4 — Parcours investisseur

| Étape | Acteur Invest | Action | Données échangées |
|-------|---------------|--------|-------------------|
| 4.1 Découverte | Visiteur / Investisseur | Consultation opportunité | Données publiques |
| 4.2 Inscription | Investisseur | Création compte | Profil investisseur |
| 4.3 Data room inscrit | Investisseur connecté | Téléchargement docs autorisés | Documents niveau registered |
| 4.4 Accès restreint | Investisseur | Demande + NDA | Validation manuelle Finance |
| 4.5 Intérêt | Investisseur | Manifestation d'intérêt | Montant proposé, statut |
| 4.6 Suivi | Staff transfert Invest | Traitement intentions | Communication ANGARA |

**Retour vers Finance :** les intérêts et demandes d'accès remontent dans le backoffice Finance (`/invest-transfer/*`).

---

## Phase 5 — Financement et clôture

| Étape | Acteur | Action |
|-------|--------|--------|
| 5.1 Accord | Staff Finance + Investisseur | Finalisation conditions |
| 5.2 Financement obtenu | Staff Finance | Enregistrement accord |
| 5.3 Suivi | Chargé post-financement | Décaissements, remboursements |
| 5.4 Incidents | Chargé post-financement | Déclaration et résolution |
| 5.5 Clôture | Chargé post-financement | Dossier clôturé |

---

## Data room — qui voit quoi, quand ?

| Moment | Public | Inscrit | Restreint |
|--------|--------|---------|-----------|
| Avant publication Invest | — | — | — |
| Après publication | Docs publics | Docs registered (si connecté) | Sur demande validée |
| NDA requis | — | — | Signature avant accès |

---

## Acteurs et responsabilités — synthèse

| Rôle | Finance | Invest |
|------|---------|--------|
| Gestionnaire | Accompagne porteur, crée dossier | — |
| Chef d'agence | Valide prospect et dossier | — |
| Analystes / KYC | Instruisent le dossier | — |
| Comité | Décide, autorise Invest | — |
| Chargé transfert | Publie opportunité, gère investisseurs | — |
| Investisseur | — | Consulte, s'intéresse, accède data room |
| Chargé post-financement | Suit le financement | — |

---

## Points de vigilance inter-plateformes

1. **Jamais de dossier_id ou file_path côté Invest** — signalez toute anomalie
2. **Publication = irréversible sans action staff** — vérifiez le snapshot avant publication
3. **Accès restreint manuel** — l'investisseur doit anticiper un délai
4. **Intérêt ≠ engagement** — la manifestation d'intérêt ouvre une discussion, pas un contrat
5. **Clôture opportunité** — une opportunité clôturée n'accepte plus de nouveaux intérêts

---

## Schéma des statuts dossier (Finance) — extrait

```text
brouillon → soumis_agence → transmis_conformite → conforme
  → en_analyse_financiere → analyse_financiere_terminee
  → en_analyse_risques → analyse_risques_terminee
  → en_analyse_juridique → analyse_juridique_terminee
  → pret_comite → en_comite → valide_comite
  → autorise_invest → preparation_investisseur → pret_investisseur
  → transfere_invest → publie_invest
  → financement_obtenu → en_suivi_post_financement → cloture
```

---

## Pour aller plus loin

- Détail staff : [Guide ANGARA Finance](./02_ANGARA_FINANCE.md)
- Détail investisseur : [Guide ANGARA Invest](./03_ANGARA_INVEST.md)
- Questions fréquentes : [FAQ](./05_FAQ_ET_LIMITES_V1.md)


---


# FAQ et limites V1

---

## Questions générales

### Quelle est la différence entre ANGARA Finance et ANGARA Invest ?

**Finance** est l'outil interne de l'institution pour instruire les dossiers. **Invest** est le portail externe où les investisseurs découvrent des opportunités validées. Invest ne voit jamais le dossier complet.

### Puis-je utiliser ANGARA Invest sans compte Finance ?

Oui. Les investisseurs accèdent uniquement au portail Invest. Le staff Finance utilise l'application interne.

### Qu'est-ce qu'un « prospect » ?

C'est l'**état** d'un projet non encore validé par le Chef d'agence — pas une personne ni une fiche séparée.

### Le porteur et le projet, c'est la même chose ?

Non. Le **porteur** est le promoteur ; le **projet** est l'activité économique qu'il porte. Un porteur peut avoir plusieurs projets.

---

## ANGARA Finance — FAQ staff

### Pourquoi ne puis-je pas créer un dossier d'instruction ?

Le projet doit être au statut **validé agence**. Vérifiez que le Chef d'agence a validé le prospect.

### L'instrument financier est-il obligatoire ?

Oui. Sans instrument, la checklist documentaire reste vide et le dossier ne peut pas progresser correctement.

### Qu'est-ce que la maturation ?

C'est une phase de structuration préalable du projet. Elle **n'est pas requise en V1** — ignorez-la sauf instruction spécifique de votre administrateur.

### Pourquoi mon menu est différent de celui d'un collègue ?

Le menu est filtré par **permissions**. Deux utilisateurs avec des rôles différents voient des modules différents.

### Comment demander des compléments au gestionnaire ?

Depuis votre module d'analyse (KYC, financier, risques, juridique), utilisez l'action **Demander un complément**. Le gestionnaire reçoit une notification.

### Puis-je publier directement sur Invest sans passer par le comité ?

Non. Le dossier doit être **autorisé Invest** (décision comité) avant la préparation.

### Que se passe-t-il si je publie une opportunité avec des données sensibles ?

Le **sanitizer** et la **checklist de publication** bloquent la publication si des champs interdits sont détectés. Ne tentez pas de contourner ce contrôle.

### Comment valider une demande d'accès data room restreint ?

Menu **Invest Transfer** → **Demandes d'accès** → examinez et accordez ou refusez. L'investisseur est notifié.

---

## ANGARA Invest — FAQ investisseur

### Dois-je m'inscrire pour voir les opportunités ?

Non pour le niveau **public**. Oui pour accéder aux documents **inscrits**, manifester un intérêt ou demander un accès restreint.

### Combien de temps pour obtenir un accès restreint ?

En V1, la validation est **manuelle** par le staff ANGARA. Le délai dépend de leur charge de travail.

### Manifester un intérêt, est-ce un engagement ferme ?

Non. C'est une **manifestation d'intérêt** qui ouvre un échange avec l'équipe ANGARA. Les conditions définitives se négocient ensuite.

### Pourquoi ne vois-je pas certains documents ?

Votre niveau d'accès (public / inscrit / restreint) détermine les documents visibles. Demandez l'accès restreint si nécessaire.

### Puis-je contacter directement le porteur du projet ?

Non en V1. Les échanges passent par l'équipe ANGARA (questions via le portail ou contact direct établi par ANGARA).

### Comment améliorer mes recommandations ?

Complétez votre **profil** et vos **critères d'investissement** (secteurs, montants, instruments, zones).

---

## Limites connues — V1 opérationnel

| Zone | Limitation | Impact utilisateur |
|------|------------|-------------------|
| UI Finance | Harmonisation partielle — certains écrans legacy subsistent | Libellés ou mise en page variables |
| Maturation | Existe en base, hors parcours V1 | Ne pas utiliser sauf cas exceptionnel |
| Matching Invest | Scoring V1, profils simplifiés | Recommandations parfois larges |
| Accès restreint | Validation manuelle | Délai avant accès documents sensibles |
| Édition inline Invest | Lecture seule dans l'assistant préparation | Modifications via re-snapshot Finance |
| Q&R Invest | Pas de chat temps réel | Réponses asynchrones |
| Export PDF rapports | Non disponible en V1 pour rapports WYSIWYG | Consultation à l'écran uniquement |
| Modules legacy | Coopérative, sectoriel, regional retirés ou cassés | Ne pas utiliser |

---

## Statuts terminaux à connaître

| Statut | Signification |
|--------|---------------|
| Projet **rejeté agence** | Fin du parcours prospect |
| Dossier **non conforme** (KYC) | Fin du parcours instruction |
| Dossier **rejeté comité** | Fin du parcours instruction |
| Dossier **clôturé** | Fin du cycle (post-financement terminé) |
| Opportunité **clôturée** | Plus de nouveaux intérêts acceptés |

---

## Contacts et escalade

| Situation | Qui contacter |
|-----------|---------------|
| Problème de connexion Finance | Administrateur ANGARA Finance |
| Problème de connexion Invest | Support portail Invest |
| Donnée sensible visible sur Invest | **Urgent** — administrateur + chargé transfert Invest |
| Question sur un dossier en cours | Votre gestionnaire ou Chef d'agence |
| Question sur une opportunité | Équipe ANGARA Invest / contact indiqué sur la fiche |

---

## Mises à jour de ce guide

Ce guide est aligné sur le référentiel `docs/angara/` au **3 août 2026**. En cas de divergence avec l'application, le référentiel interne et l'application prévalent — signalez l'écart à votre administrateur pour mise à jour de la documentation.


---

