import { test, expect } from '@playwright/test';

test('test Fizz', async ({ page }) => {
    await page.goto('/');
    await page.getByPlaceholder('Please input number').fill("3");
    await page.getByRole('button', {name:'Fizz or Buzz'}).click();
    await expect(page.locator('.answer')).toHaveText("Fizz");
});

test('test Buzz', async ({ page }) => {
    await page.goto('/');
    await page.getByPlaceholder('Please input number').fill("5");
    await page.getByRole('button', {name:'Fizz or Buzz'}).click();
    await expect(page.locator('.answer')).toHaveText("Buzz");
});

test('test FizzBuzz', async ({ page }) => {
    await page.goto('/');
    await page.getByPlaceholder('Please input number').fill("15");
    await page.getByRole('button', {name:'Fizz or Buzz'}).click();
    await expect(page.locator('.answer')).toHaveText("FizzBuzz");
});

test('test Other', async ({ page }) => {
    await page.goto('/');
    await page.getByPlaceholder('Please input number').fill("1");
    await page.getByRole('button', {name:'Fizz or Buzz'}).click();
    await expect(page.locator('.answer')).toHaveText("1");
});

test('test Empty', async ({ page }) => {
    await page.goto('/');
    await page.getByPlaceholder('Please input number').fill("");
    await page.getByRole('button', {name:'Fizz or Buzz'}).click();
    await expect(page.locator('.answer')).toBeEmpty();
});