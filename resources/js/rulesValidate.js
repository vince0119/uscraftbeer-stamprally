import { helpers } from '@vuelidate/validators'

export const password =  helpers.withMessage(
                            'password must be include number and alpha character',
                            helpers.regex(/^.*(?=.*[a-zA-Z])(?=.*[0-9]).*$/)
                          );