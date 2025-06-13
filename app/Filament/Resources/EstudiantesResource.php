<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EstudiantesResource\Pages;
use App\Filament\Resources\EstudiantesResource\RelationManagers;
use App\Models\Estudiantes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EstudiantesResource extends Resource
{
    protected static ?string $model = Estudiantes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('apellido')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefono')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('fecha_nacimiento'),
                Forms\Components\Textarea::make('direccion')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('estado')
                    ->required()
                    ->maxLength(255)
                    ->default('activo'),
                Forms\Components\TextInput::make('nivel_estudio')
                    ->required()
                    ->maxLength(255)
                    ->default('primaria'),
                Forms\Components\TextInput::make('genero')
                    ->maxLength(255),
                Forms\Components\TextInput::make('documento_identidad')
                    ->maxLength(255),
                Forms\Components\TextInput::make('observaciones')
                    ->maxLength(255),
                Forms\Components\TextInput::make('codigo_estudiante')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('grado')
                    ->maxLength(255),
                Forms\Components\TextInput::make('padre_apoderado')
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefono_padre_apoderado')
                    ->tel()
                    ->maxLength(255),
              
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('apellido')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_nacimiento')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('estado')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nivel_estudio')
                    ->searchable(),
                Tables\Columns\TextColumn::make('genero')
                    ->searchable(),
                Tables\Columns\TextColumn::make('foto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('documento_identidad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('observaciones')
                    ->searchable(),
                Tables\Columns\TextColumn::make('codigo_estudiante')
                    ->searchable(),
                Tables\Columns\TextColumn::make('grado')
                    ->searchable(),
                Tables\Columns\TextColumn::make('padre_apoderado')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono_padre_apoderado')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_padre_apoderado')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEstudiantes::route('/'),
            'create' => Pages\CreateEstudiantes::route('/create'),
            'view' => Pages\ViewEstudiantes::route('/{record}'),
            'edit' => Pages\EditEstudiantes::route('/{record}/edit'),
        ];
    }
}
