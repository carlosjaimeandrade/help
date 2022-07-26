const express = require("express");
const app = new express();
const puppeteer = require('puppeteer');

app.get("/", async(req, res) => {

    const browser = await puppeteer.launch({ headless: false }); // cria um browser. A propriedade headless define se o browser irá abrir com interface gráfica ou se apenas irá executar em segundo plano, sem GUI. false = irá abrir interface gráfica; true = não irá abrir interface gráfica
    const page = await browser.newPage(); // cria uma nova aba no navegador acima
    await page.goto("file:///D:/xampp/htdocs/puppeteer/teste.html");

    await page.waitForTimeout(3000)

    page.evaluate(() => {
        const select1 = document.querySelector('.select1')
        const select2 = document.querySelector('.select2')
        // em alguns caso como do instagram eles fazem a class mudar em cada recarregamento da pagina, depedendo do site, o ideal será pegar pela arvore da dom, como abaixo
        const entregas = document.querySelectorAll('body > div:nth-child(4) > input')
        const button = document.querySelector('body > button')

        for (var i = 0; i < select1.children.length; i++) {
            //vou escolher o que quero marcar
            if (select1.children[i].value == "Cenoura") {
                select1.children[i].setAttribute("selected", "selected")
            }
        }

        for (var i = 0; i < select2.children.length; i++) {
            //vou escolher o que quero marcar
            if (select2.children[i].value == "Pimenta") {
                select2.children[i].setAttribute("selected", "selected")
            }
        }

        // escolhendo a opção do radio
        entregas.forEach(entrega => {
            if (entrega.value == "1dia") {
                entrega.setAttribute("checked", "checked")
            }
        })

        button.click();
    })
})

app.listen(3333, () => {
    console.log('servidor rodando')
})