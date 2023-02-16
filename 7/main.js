// 7章チェックテスト
{
    // 問1
    let numbers = [2, 5, 12, 13, 15, 18, 22];

    function isEven(numbers) {
        let num;
        for (let i = 0; i < numbers.length; i++) {
            num = numbers[i];
            if (num % 2 === 0) {
                console.log(num + 'は偶数です');
            }
        }
    }

    isEven(numbers);
}

{
    // 問2
    class Car {
        constructor(gas, num) {
            this.gas = gas;
            this.num = num;
        }
        getNumGas() {
            console.log(`ガソリンは${this.gas}です。ナンバーは${this.num}です`);
        }
    }

    let mycar = new Car(90, 4567);
    mycar.getNumGas();
}
