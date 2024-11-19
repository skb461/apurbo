from asyncio import wait
from telnetlib import EC
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
import time

options = Options()
options.add_experimental_option(name="detach", value=True)
driver = webdriver.Chrome(options=options)

# driver.get('http://localhost/apurbo/admin.php')

driver.get('http://localhost/apurbo/index.php')
driver.maximize_window()
time.sleep(3)



#Student Registation

driver.find_element(By.CLASS_NAME ,value="modal_btn").click()
time.sleep(2)

driver.find_element(By.ID, "floatingId").send_keys("CS 2102037")
time.sleep(2)
driver.find_element(By.ID, "floatingDepartment").send_keys("CSE")
time.sleep(2)
driver.find_element(By.ID, "floatingName").send_keys("Ashik Iqbal")
time.sleep(2)
driver.find_element(By.ID, "floatingGender").send_keys("Male")
time.sleep(2)
driver.find_element(By.ID, "floatingAge").send_keys("23")
time.sleep(2)
driver.find_element(By.ID, "floatingBlood").send_keys("b-")
time.sleep(2)
driver.find_element(By.ID, "floatingDonate").send_keys("1")
time.sleep(2)
driver.find_element(By.ID, "floatingDonateDate").send_keys("10-07-2024")
time.sleep(2)
driver.find_element(By.ID, "floatingCity").send_keys("Dhaka")
time.sleep(2)
driver.find_element(By.ID, "floatingNumber").send_keys("01885939249")
time.sleep(2)

driver.find_element(By.CLASS_NAME, value="submit_btn").click()
time.sleep(3)





# Student Site

# driver.find_element(By.ID, value="s_id").send_keys("CS 2102073")
# driver.find_element(By.ID, value="s_password").send_keys("#@1234a")







time.sleep(100)


driver.close()