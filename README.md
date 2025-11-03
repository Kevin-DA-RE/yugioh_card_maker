# 🎴 YuGiOh! Card Maker  

**🖌️ Créez vos propres cartes Yu-Gi-Oh! via une interface moderne, inspirée de l’univers du célèbre jeu de cartes.** 
**Soyez dans la peau du createur du duel de monstres et laissez vous emportez par votre imagination** 

Projet développé avec **Vue.js**, **Symfony** et **shadcn-vue**.

---

## 🚀 Présentation  

**YuGiOh! Card Maker** est une application web permettant aux utilisateurs de :  

- 🎨 **Créer leurs propres cartes Yu-Gi-Oh! personnalisées**  
- 📥 **Importer des cartes officielles issues de l’animé / TCG** via un service externe  
- 🖼️ **Visualiser les cartes au format officiel** (Type, Attribut, ATK/DEF, Niveau, Effets, etc.)  
- 📂 **Gérer, modifier et organiser leurs créations facilement**  
- 🌐 **Profiter d’une interface immersive en 3D**  

⚠️ **Important :**  
Les cartes créées via l’application :  
- ❌ **Ne peuvent pas être utilisées lors de tournois officiels ou compétitions Yu-Gi-Oh!**  
- ❌ **Ne sont pas destinées à être utilisées en dehors de l’application** (usage interne uniquement)  
- ✅ **Sont réalisées à des fins créatives, personnelles et non commerciales**

---

## 🛠️ Stack technique  

| Technologie       | Description |
|-------------------|-------------|
| ⚙️ **Symfony**    | Backend, API et gestion des données |
| 🎨 **Vue.js 3**   | Frontend réactif et dynamique |
| 💠 **shadcn-vue** | Composants UI modernes et accessibles |
| 🗄️ **MySQL / PostgreSQL** | Base de données |
| 📦 **Composer & NPM** | Gestion des dépendances |
| 🌍 **REST API**   | Communication client / serveur |

---

## 🧩 Service externe  

L’application utilise un service externe (ex : **YGOProDeck API** ou similaire) pour :  
- 📥 **Importer des cartes officielles issues de l’animé ou du TCG**  
- 📚 **Récupérer leurs infos complètes : nom, image, effet, type, attribut, archétype, etc.**

---
📜 Licence & droits

Ce projet est réalisé à des fins pédagogiques et personnelles.
Yu-Gi-Oh! est une licence appartenant à Konami / Kazuki Takahashi.

📌 Usage des cartes créées via l’application :

Exclusivement destinées à un usage créatif et interne à l’application

Non autorisées en tournois officiels, compétitions ou contextes réels de jeu

Les ressources officielles importées via les API restent la propriété de leurs ayants droit

🤝 Contributions

Les contributions sont les bienvenues !
Tu peux :

Proposer des idées 💡

Soumettre une issue 🛠️

Ouvrir une pull request 📬

✨ “It’s time to du-du-du-duel… and create your own cards !”

## 📦 Installation  

### ✅ Prérequis  
- PHP ≥ 8.x  
- Composer  
- Node.js ≥ 18 + npm / yarn  
- MySQL ou PostgreSQL  
- Symfony CLI (optionnel mais recommandé)

### ⚙️ Étapes d’installation  

```bash
# 1. Cloner le projet
git clone https://github.com/Kevin-DA-RE/yugioh_card_maker.git
cd yugioh-card-maker

# 2. Installer les dépendances backend (Symfony)
composer install

# 3. Installer les dépendances frontend (Vue.js + shadcn-vue)
npm install   # ou yarn install

# 4. Configurer les variables d’environnement
cp .env.example .env

# 5. Créer la base de données et appliquer les migrations
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

# 6. Lancer le serveur backend
symfony serve:start   # ou php -S localhost:8000 -t public/

# 7. Lancer le serveur frontend
npm run dev   # ou yarn dev
