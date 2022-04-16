This website was created for a computer club and is a win-win lottery for customers.

## The tasks that I faced

- Stand out from competitors
- Increase the average check
- Avoid abuse by administrators when accruing bonuses for customers

## Solution

Some computer clubs offer bonuses when replenishing the balance for a certain amount to increase the average check. Someone gives out gifts, accrues bonuses, some hold a win-win lottery using a raffle drum.

I decided to take the mechanics of the lottery with the raffle drum and improve it a bit.

Since most computer club visitors play CS:GO, the mechanics of cases and getting a random prize are familiar to them. Therefore, I decided to transfer this mechanic from CS:GO to the lottery.

This is how this site appeared, which is displayed on TVs near the reception desk. Each client who replenishes the game balance in the amount of more than 350 rubles participates in the lottery and all visitors watch the draw.

To avoid abuse by administrators, I integrated the lottery with the SENET computer club management program. The money won is immediately credited to the client's account, and the drinks or chocolate bars won are automatically deducted from the warehouse. The administrator cannot influence the course of the draw, change the amount won or re-draw.

## Problems that arose during the development process

Since SENET does not have an open API that allows crediting the balance to customers and selling goods. I had to use cURL requests to authorize the administrator in the SENET when logging in to the lottery site. And also replace the headers with identical ones that are sent to the SENET administrative panel when replenishing player balances.

## How it works

- The administrator is authorized on his computer
- The client replenishes the balance in the amount of more than 350 rubles
- The administrator enters the customer's number on the lottery site
- The client's last deposit is checked for compliance with the conditions of the lottery, as well as for preventing the reuse of 1 deposit
- If everything was successful, the client chooses the case that he wants to open (cases differ in prizes and the probability of winning big prizes)
- Then the administrator opens the selected case
- The site receives data from SENET on the rest of the goods in stock and removes from the draw those that are not in stock
- The site shuffles all the prizes and chooses a random one
- If it is money, then it is credited to the client's account. And if it is a drink or a chocolate bar, then it is written off from the stock
- The winning data is entered into the database
- After that, the list of prizes is rendered and the winning prize is rendered separately
- The roulette scrolling animation takes place on the site

## Results

- The average check increased by 32% (from 198 rubles to 261 rubles)
- The frequency of visits to the computer club has increased by 10%
- Got a lot of positive feedback

## Demo

If you want to participate in the lottery yourself, then you need to do the following

1. Go to the website - [Cooking Blog](https://github.com/laravel/laravel)
2. Pass authorization
```
Login - admin
Password - qwerty123
```

3. Enter the phone number for client authorization
```
79001112233
```
1500 rubles will be credited to your balance, so you can open several cases

4. Choose the case you like
5. Click on the "Open Case" button
6. Follow the results of the lottery
7. Repeat