# 🗓️ Sistema de Cálculo de Folgas + Notificações Em App Android *(Em Desenvolvimento)*

Este repositório contém a versão inicial do **site em PHP/HTML/CSS/JS/SQL** que calcula folgas e também envia **notificações push** para um **app Android (Kotlin)**.

⚠️ **IMPORTANTE:**  
O aplicativo Android **não faz parte deste repositório**.  
O projeto está **em construção**, e várias funcionalidades ainda estão sendo implementadas.

---

## 🚧 Status do Projeto
- [x] Estrutura básica do site sem estilização
- [x] Primeiros testes de cálculo de folgas  
- [x] Notificação push nao sincronizada com o site
- [ ] Interface estilizada
- [ ] Painel para envio de notificações  
- [ ] Documentação completa  
- [ ] Integração final com o app Android  

---

## 📌 Objetivo do Projeto
Criar um sistema simples e rápido para:

- Calcular folgas automaticamente (ex.: escala 5x1, ou escala 5x1 com folgas as domingos)  
- Exibir próximas folgas e o intervalo entre elas de forma clara  
- Enviar notificações push para o app via Firebase quando estiver chegando perto da folga  

Este projeto funciona como **backend + painel web**, conectado a um app Android que recebe os alertas.

---

## 🧰 Tecnologias Utilizadas

### 💻 Frontend
- HTML5  
- CSS3  
- JavaScript  

### 🌐 Backend
- PHP  
- cURL  
- Firebase Cloud Messaging (FCM)  
- Service Account (JSON) para autenticação
- MyPHPAdmin (MySQL)

### 📱 App Android *(não incluído aqui)*
- Kotlin  
- Firebase Messaging  

---
